<?php

class XMLAttribute
{
    private $id;
    private $name;
    private $type;
    private $valueType;
    private $rules;
    private $options;
    private $values;

    public function checkAttributeValueType($attributeValueType)
    {
        $valueTypeArr = array(
            "text" => "文本类型",
            "boolean" => "boolean类型",
            "numeric" => "数据类型",
            "enum" => "枚举型",
            "object" => "对象型"
        );
        if (empty($attributeValueType)) return false;
//        foreach ($valueTypeArr as $key => $value){
//            if($attributeValueType === $key) return true;
//        }
        if (array_key_exists($attributeValueType, $valueTypeArr)) return true;
        return false;
    }

    /**
     * @throws Exception
     */
    public function toElement($dom, $parent)
    {
        $this->checkAttribute();
        if ("single" === $this->type || "multi" === $this->type) {
            $attributeElm = $this->appendAttributeValues($dom, $parent, $this);
            $this->appendRulesElement($dom, $attributeElm, $this->rules, $this->id);
            $this->appendOptionsElement($dom, $attributeElm, $this->options, $this->id);
        } elseif ("complex" === $this->type) {
            $attributeElm = $dom->createElement("attribute");
            $attributeElm->setAttribute("id", $this->id);
            $attributeElm->setAttribute("type", $this->type);
            if ($this->name != "" && !is_null($this->name)) {
                $attributeElm->setAttribute("name", $this->name);
            }
            if ($this->checkAttributeValueType($this->valueType)) {
                $attributeElm->setAttribute("valueType", $this->valueType);
            }

            $attributesElm = $dom->createElement("attributes");
            if (is_array($this->values)) {
                foreach ($this->values as $attribute) {
                    if ($attribute instanceof XMLAttribute) {
                        $attributeElmTmp = $this->appendAttributeValues($dom, $attributesElm, $attribute);
                        $this->appendRulesElement($dom, $attributeElmTmp, $attribute->rules, $attribute->id);
                        $this->appendOptionsElement($dom, $attributeElmTmp, $attribute->options, $attribute->id);
                    }
                }
            } elseif (!empty($this->values)) {//complex类型的values必须是数组 或 空
                throw new \Exception("id=[" . $this->id . "] XMLAttribute属性values不合法!");
            }
            $attributeElm->appendChild($attributesElm);
            $this->appendRulesElement($dom, $attributeElm, $this->rules, $this->id);
            $parent->appendChild($attributeElm);
        } elseif ("multiComplex" === $this->type) {
            $attributeElm = $dom->createElement("attribute");
            $attributeElm->setAttribute("id", $this->id);
            if ($this->name != "" && !is_null($this->name)) {
                $attributeElm->setAttribute("name", $this->name);
            }
            $attributeElm->setAttribute("type", $this->type);
            $attributeElm->setAttribute("valueType", "object");

            if (is_array($this->values)) {
                foreach ($this->values as $complexAttribute) {
                    if ($complexAttribute instanceof XMLAttribute) {
                        $attributesElm = $dom->createElement("attributes");
                        if (is_array($complexAttribute->getValues())) {
                            foreach ($complexAttribute->getValues() as $attribute) {
                                if ($attribute instanceof XMLAttribute) {
                                    if (!$this->checkAttributeValueType($attribute->getValueType())) {
                                        throw new \Exception("id=[" . $attribute->getId() . "] XMLAttribute属性valueType不正确!");
                                    }
                                    $attributeElmTmp = $this->appendAttributeValues($dom, $attributesElm, $attribute);
                                    $this->appendRulesElement($dom, $attributeElmTmp, $attribute->rules, $attribute->id);
                                    $this->appendOptionsElement($dom, $attributeElmTmp, $attribute->options, $attribute->id);
                                }
                            }
                        } elseif (!empty($complexAttribute->getValues())) {//complex类型的values必须是数组 或 空
                            throw new \Exception("id=[" . $complexAttribute->getId() . "] XMLAttribute属性values不合法!");
                        }
                        $attributeElm->appendChild($attributesElm);
                    }
                }
            } elseif (!empty($this->values)) {//multiComplex类型的values必须是数组 或 空
                throw new \Exception("id=[" . $this->id . "] XMLAttribute属性values不合法!");
            }
            $parent->appendChild($attributeElm);
        } else {
            throw new \Exception("id=[" . $this->id . "] XMLAttribute属性type类型不正确!");
        }

    }

    /**
     * @throws Exception
     */
    public function toValueElement($dom, $parent)
    {
        $this->checkAttribute();
        if ("single" === $this->type || "multi" === $this->type) {
            $this->appendAttributeValues($dom, $parent, $this);
        } elseif ("complex" === $this->type) {
            $attributeElm = $dom->createElement("attribute");
            $attributeElm->setAttribute("id", $this->id);
            $attributeElm->setAttribute("type", $this->type);
            if ($this->name != "" && !is_null($this->name)) {
                $attributeElm->setAttribute("name", $this->name);
            }
            if ($this->checkAttributeValueType($this->valueType)) {
                $attributeElm->setAttribute("valueType", $this->valueType);
            }

            $attributesElm = $dom->createElement("attributes");
            if (is_array($this->values)) {
                foreach ($this->values as $attribute) {
                    if ($attribute instanceof XMLAttribute) {
                        $this->appendAttributeValues($dom, $attributesElm, $attribute);
                    }
                }
            } elseif (!empty($this->values)) {//complex类型的values必须是数组 或 空
                throw new \Exception("id=[" . $this->id . "] XMLAttribute属性values不合法!");
            }
            $attributeElm->appendChild($attributesElm);
            $parent->appendChild($attributeElm);
        } elseif ("multiComplex" === $this->type) {
            $attributeElm = $dom->createElement("attribute");
            $attributeElm->setAttribute("id", $this->id);
            if ($this->name != "" && !is_null($this->name)) {
                $attributeElm->setAttribute("name", $this->name);
            }
            $attributeElm->setAttribute("type", $this->type);
            $attributeElm->setAttribute("valueType", "object");

            if (is_array($this->values)) {
                foreach ($this->values as $complexAttribute) {
                    if ($complexAttribute instanceof XMLAttribute) {
                        $attributesElm = $dom->createElement("attributes");
                        if (is_array($complexAttribute->getValues())) {
                            foreach ($complexAttribute->getValues() as $attribute) {
                                if ($attribute instanceof XMLAttribute) {
                                    if (!$this->checkAttributeValueType($attribute->getValueType())) {
                                        throw new \Exception("id=[" . $attribute->getId() . "] XMLAttribute属性valueType不正确!");
                                    }
                                    $this->appendAttributeValues($dom, $attributesElm, $attribute);
                                }
                            }
                        } elseif (!empty($complexAttribute->getValues())) {//complex类型的values必须是数组 或 空
                            throw new \Exception("id=[" . $this->id . "] XMLAttribute属性values不合法!");
                        }
                        $attributeElm->appendChild($attributesElm);
                    }
                }
            } elseif (!empty($this->values)) {//multiComplex类型的values必须是数组 或 空
                throw new \Exception("id=[" . $this->id . "] XMLAttribute属性values不合法!");
            }
            $parent->appendChild($attributeElm);
        } else {
            throw new \Exception("id=[" . $this->id . "] XMLAttribute属性type类型不正确!");
        }
    }

    /**
     * @throws Exception
     */
    protected function appendAttributeValues($dom, $parent, $attribute)
    {
        $attributeElm = $dom->createElement("attribute");
        if ($attribute->getId() != "" && !is_null($attribute->getId())) {
            $attributeElm->setAttribute("id", $attribute->getId());
        }
        if ($attribute->getName() != "" && !is_null($attribute->getName())) {
            $attributeElm->setAttribute("name", $attribute->getName());
        }
        if ($attribute->getType() != "" && !is_null($attribute->getType())) {
            $attributeElm->setAttribute("type", $attribute->getType());
        }
        if ($this->checkAttributeValueType($attribute->getValueType())) {
            $attributeElm->setAttribute("valueType", $attribute->getValueType());
        }
        $values = $attribute->getValues();

        if ("single" === $attribute->getType()) {
            $valueElm = $dom->createElement("value");
            if (is_string($values)) {
                $text = $dom->createTextNode($values);
                $valueElm->appendChild($text);
            } elseif (!is_null($values)) {//single类型的values必须是字符串 或 空
                throw new \Exception("id=[" . $attribute->getId() . "] XMLAttribute属性values不合法!");
            }
            $attributeElm->appendChild($valueElm);
            $parent->appendChild($attributeElm);
        } elseif ("multi" === $attribute->getType()) {
            $valuesElm = $dom->createElement("values");
            if (is_array($values)) {
                foreach ($values as $value) {
                    if (is_string($value) || is_null($value)) {
                        $valueElm = $dom->createElement("value", $value);
                        $valuesElm->appendChild($valueElm);
                    }
                }
            } elseif (!empty($values)) {//multi类型的values必须是数组 或 空
                throw new \Exception("id=[" . $attribute->getId() . "] XMLAttribute属性values不合法!");
            }
            $attributeElm->appendChild($valuesElm);
            $parent->appendChild($attributeElm);
        } else {
            throw new \Exception("id=[" . $attribute->getId() . "] XMLAttribute属性type类型不正确!");
        }
        return $attributeElm;
    }

    /**
     * @throws Exception
     */
    protected function appendRulesElement($dom, $parent, $rules, $attributeId)
    {
        if (empty($rules)) return;
        if (!is_array($rules)) {
            throw new \Exception("id=[" . $attributeId . "] XMLAttribute属性rules不合法!");
        }
        $rulesElm = $dom->createElement("rules");
        foreach ($rules as $rule) {
            if ($rule instanceof AttributeRule) {
                $rule->toElement($dom, $rulesElm, $attributeId);
            }
        }
        $parent->appendChild($rulesElm);
    }

    /**
     * @throws Exception
     */
    protected function appendOptionsElement($dom, $parent, $options, $attributeId)
    {
        if (empty($options)) return;
        if (!is_array($options)) {
            throw new \Exception("id=[" . $attributeId . "] XMLAttribute属性options不合法!");
        }
        $optionsElm = $dom->createElement("options");
        foreach ($options as $option) {
            if ($option instanceof Option) {
                $option->toElement($dom, $optionsElm, $attributeId);
            }
        }
        $parent->appendChild($optionsElm);
    }

    /**
     * @throws Exception
     */
    protected function checkAttribute()
    {
        if (empty($this->id) && $this->id != '0') {
            throw new \Exception("XMLAttribute属性缺少id!");
        }
        if (empty($this->type) && $this->type != '0') {
            throw new \Exception("id=[" . $this->id . "] XMLAttribute属性缺少type！");
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getValueType()
    {
        return $this->valueType;
    }

    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }

    public function getRules()
    {
        return $this->rules;
    }

    public function setRules($rules)
    {
        $this->rules = $rules;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setValues($values)
    {
        $this->values = $values;
    }
}