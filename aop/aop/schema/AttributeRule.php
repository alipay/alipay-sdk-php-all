<?php

class AttributeRule
{
    private $type;
    private $name;
    private $value;

    /**
     * @param $name
     * @param $type
     * @param $value
     */
    public function __construct($type = null, $name = null, $value = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    public function checkRuleType($ruleType)
    {
        $ruleTypeArr = array(
            "required" => "是否必填,true/false",
            "maxLength" => "字符串要求最大长度",
            "minLength" => "字符串要求最小长度",
            "exclusiveMaximum" => "最大值,包含最大值,<=",
            "exclusiveMinimum" => "最小值,包含最小值,>=",
            "maximum" => "最大值,不包含最大值,<",
            "minimum" => "最小值,不包含最小值,>",
            "maxSize" => "最大个数",
            "minSize" => "最大个数",
            "precision" => "精度",
            "pattern" => "正则表达式",
            "valueType" => "值类型",
            "devTip" => "输入提示",
            "height" => "高度",
            "width" => "长度",
            "urlSchema" => "url格式"
        );
        if (empty($ruleType)) return false;
        if (array_key_exists($ruleType, $ruleTypeArr)) return true;
        return false;
    }

    /**
     * @throws Exception
     */
    public function toElement($dom, $parent, $attributeId)
    {
        if (empty($this->name) && $this->name != '0') {
            throw new \Exception("id=[" . $attributeId . "] AttrRule格式错误!AttrRule缺少name!");
        }
        if (!$this->checkRuleType($this->type)) {
            throw new \Exception("id=[" . $attributeId . "] AttrRule类型type不合法!");
        }
        if (empty($this->value) && $this->value != '0') {
            throw new \Exception("id=[" . $attributeId . "] AttrRule格式错误!AttrRule缺少value!");
        }
        $rule = $dom->createElement("rule");
        $rule->setAttribute("name", $this->name);
        $rule->setAttribute("type", $this->type);
        $rule->setAttribute("value", $this->value);
        $parent->appendChild($rule);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}