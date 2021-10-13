<?php
require_once 'XMLAttribute.php';
require_once 'AttributeRule.php';
require_once 'Option.php';
require_once 'ServiceSchemaFactory.php';

class ServiceSchemaReader
{
    /**
     * @throws Exception
     */
    public static function readXmlForArrayByFile($filePath)
    {
        set_error_handler('ServiceSchemaReader::errorHandler');
        $dom = new DOMDocument('1.0', 'utf-8');
        try {
            $dom->load($filePath);
        } catch (Exception $e) {
            throw new \Exception("XML格式错误,无法正常解析!");
        }
        return self::readXmlForList($dom->documentElement);
    }

    /**
     * @throws Exception
     */
    public static function readXmlForArrayByString($xmlString)
    {
        set_error_handler('ServiceSchemaReader::errorHandler');
        $dom = new DOMDocument('1.0', 'utf-8');
        try {
            $dom->loadXML($xmlString);
        } catch (Exception $e) {
            throw new \Exception("XML格式错误,无法正常解析!");
        }
        return self::readXmlForList($dom->documentElement);
    }

    /**
     * @throws Exception
     */
    public static function readXmlForList(DOMElement $rootEle)
    {
        $attributeArr = array();
        foreach ($rootEle->getElementsByTagName('attribute') as $item) {
            if ($item->parentNode === $rootEle) {
                $attribute = self::elementToAttribute($item);
                $attributeArr[$attribute->getId()] = $attribute;
            }
        }
        return $attributeArr;
    }

    /**
     * @throws Exception
     */
    public static function elementToAttribute($attributeElm)
    {
        $attributeId = $attributeElm->getAttribute("id");
        if (self::checkEmpty($attributeId)) {
            throw new \Exception("Attribute属性缺少id! 节点路径 [" . $attributeElm->getNodePath() . "]");
        }
        $attributeName = $attributeElm->getAttribute("name");
        $attributeType = $attributeElm->getAttribute("type");
        if (self::checkEmpty($attributeType)) {
            throw new \Exception("Attribute属性缺少type! 节点路径 [" . $attributeElm->getNodePath() . "].attributeId=" . $attributeId);
        }

        $valueType = $attributeElm->getAttribute("valueType");
        $attribute = ServiceSchemaFactory::createAttribute($attributeId, $attributeName, $attributeType, $valueType);
        if (!$attribute->checkAttributeValueType($valueType)) {
            throw new \Exception("Attribute属性valueType不正确! 节点路径 [" . $attributeElm->getNodePath() . "].attributeId=" . $attributeId);
        }

        if ("single" === $attributeType) {
            ServiceSchemaReader::elementToSingleAttribute($attributeElm, $attribute);
        } elseif ("multi" === $attributeType) {
            ServiceSchemaReader::elementToMultiAttribute($attributeElm, $attribute);
        } elseif ("complex" === $attributeType) {
            ServiceSchemaReader::elementToComplexAttribute($attributeElm, $attribute);
        } elseif ("multiComplex" === $attributeType) {
            ServiceSchemaReader::elementToMultiComplexAttribute($attributeElm, $attribute);
        } else {
            throw new \Exception("Attribute属性type类型不正确! 节点路径 [" . $attributeElm->getNodePath() . "].attributeId=" . $attributeId);
        }
        return $attribute;
    }

    /**
     * @throws Exception
     */
    private static function elementToSingleAttribute($attributeElm, $attribute)
    {
        self::elementToRule($attributeElm, $attribute);
        self::elementToOption($attributeElm, $attribute);
        foreach ($attributeElm->getElementsByTagName('value') as $value) {
            if ($value->parentNode === $attributeElm) {
                $attribute->setValues($value->nodeValue);
                //只取第一个<value>标签
                break;
            }
        }
    }

    /**
     * @throws Exception
     */
    private static function elementToMultiAttribute($attributeElm, $attribute)
    {
        self::elementToRule($attributeElm, $attribute);
        self::elementToOption($attributeElm, $attribute);
        foreach ($attributeElm->getElementsByTagName('values') as $values) {
            if ($values->parentNode === $attributeElm) {
                $valueArr = array();
                foreach ($values->getElementsByTagName('value') as $value) {
                    if ($value->parentNode === $values) {
                        $valueArr[] = $value->nodeValue;
                    }
                }
                $attribute->setValues($valueArr);
                //只取第一个<values>标签
                break;
            }
        }
    }

    /**
     * @throws Exception
     */
    private static function elementToComplexAttribute($attributeElm, $attribute)
    {
        self::elementToRule($attributeElm, $attribute);
        foreach ($attributeElm->getElementsByTagName('attributes') as $attributes) {
            if ($attributes->parentNode === $attributeElm) {
                $attributeArr = array();
                foreach ($attributes->getElementsByTagName('attribute') as $item) {
                    if ($item->parentNode === $attributes) {
                        $attributeType = $item->getAttribute("type");
                        if ("single" === $attributeType || "multi" === $attributeType) {
                            $attributeArr[] = self::elementToAttribute($item);
                        }
                    } else {
                        throw new \Exception("Attribute属性type类型不正确! 节点路径 [" . $item->getNodePath() . "]");
                    }
                }
                $attribute->setValues($attributeArr);
                //只取第一个<attributes>标签
                break;
            }
        }
    }

    /**
     * @throws Exception
     */
    private static function elementToMultiComplexAttribute($attributeElm, $attribute)
    {
        $attributeArr = array();
        foreach ($attributeElm->getElementsByTagName('attributes') as $attributes) {
            if ($attributes->parentNode === $attributeElm) {
                $complexAttr = new XMLAttribute();//每一个$complexAttr都是一个ComplexAttribute对象
                $valuesArr = array();
                foreach ($attributes->getElementsByTagName('attribute') as $item) {
                    if ($item->parentNode === $attributes) {
                        $attributeType = $item->getAttribute("type");
                        if ("single" === $attributeType || "multi" === $attributeType) {
                            $valuesArr[] = self::elementToAttribute($item);
                        }
                    } else {
                        throw new \Exception("Attribute属性type类型不正确! 节点路径 [" . $item->getNodePath() . "]");
                    }
                }
                $complexAttr->setValues($valuesArr);
                $attributeArr[] = $complexAttr;
            }
        }
        $attribute->setValues($attributeArr);
    }

    /**
     * @throws Exception
     */
    private static function elementToRule($attributeElm, $attribute)
    {
        foreach ($attributeElm->getElementsByTagName('rules') as $rules) {
            if ($rules->parentNode === $attributeElm) {
                $ruleArr = array();
                foreach ($rules->getElementsByTagName('rule') as $rule) {
                    if ($rule->parentNode === $rules) {
                        $ruleType = $rule->getAttribute("type");
                        $ruleName = $rule->getAttribute("name");
                        $ruleValue = $rule->getAttribute("value");
                        if (self::checkEmpty($ruleValue)) {
                            throw new \Exception("id=[" . $attribute->getId() . "] AttrRule格式错误!AttrRule缺少value!");
                        }
                        $ruleObj = ServiceSchemaFactory::createRule($ruleType, $ruleName, $ruleValue);
                        if (!$ruleObj->checkRuleType($ruleType)) {
                            throw new \Exception("id=[" . $attribute->getId() . "] AttrRule类型type不合法!");
                        }
                        $ruleArr[] = $ruleObj;
                    }
                }
                $attribute->setRules($ruleArr);
                //只取第一个<rules>标签
                break;
            }
        }
    }

    /**
     * @throws Exception
     */
    private static function elementToOption($attributeElm, $attribute)
    {
        foreach ($attributeElm->getElementsByTagName('options') as $options) {
            if ($options->parentNode === $attributeElm) {
                $optionsArr = array();
                foreach ($options->getElementsByTagName('option') as $option) {
                    if ($option->parentNode === $options) {
                        $displayName = $option->getAttribute("displayName");
                        if (self::checkEmpty($displayName)) {
                            throw new \Exception("id=[" . $attribute->getId() . "] Option格式错误!Option名称displayName不能为空!");
                        }
                        $value = $option->getAttribute("value");
                        if (self::checkEmpty($value)) {
                            throw new \Exception("id=[" . $attribute->getId() . "] Option格式错误!Option的值value不能为空!");
                        }
                        $optionObj = ServiceSchemaFactory::createOption($displayName, $value);
                        $optionsArr[] = $optionObj;
                    }
                }
                $attribute->setOptions($optionsArr);
                //只取第一个<options>标签
                break;
            }
        }
    }

    private static function checkEmpty($value)
    {
        if (is_null($value))
            return true;
        if (trim($value) == "")
            return true;
        return false;
    }

    /**
     * @throws Exception
     */
    static function errorHandler($errno, $errstr, $errfile, $errline)
    {
        throw new \Exception($errstr);
        return true;
    }
}
