<?php

class Option
{
    private $displayName;
    private $value;

    /**
     * @param $displayName
     * @param $value
     */
    public function __construct($displayName = null, $value = null)
    {
        $this->displayName = $displayName;
        $this->value = $value;
    }

    /**
     * @throws Exception
     */
    public function toElement($dom, $parent, $attributeId)
    {
        if (empty($this->displayName) && $this->displayName != '0') {
            throw new \Exception("id=[" . $attributeId . "] Option格式错误!Option名称displayName不能为空!");
        }
        if (empty($this->value) && $this->value != '0') {
            throw new \Exception("id=[" . $attributeId . "] Option格式错误!Option的值value不能为空!");
        }
        $option = $dom->createElement("option");
        $option->setAttribute("displayName", $this->displayName);
        $option->setAttribute("value", $this->value);
        $parent->appendChild($option);
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param mixed $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
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