<?php

class ServiceSchemaWriter
{
    /**
     * @throws Exception
     */
    public static function writeSchemaXmlString(array $attributesArr)
    {
        $dom = new DOMDocument('1.0', 'utf-8');
        $root = $dom->createElement("serviceSchema");
        foreach ($attributesArr as $attribute) {
            if ($attribute instanceof XMLAttribute) {
                $attribute->toValueElement($dom, $root);
            }
        }
        $dom->appendChild($root);
        return $dom->saveXML($dom->documentElement);
    }

    /**
     * @throws Exception
     */
    public static function writeFullchemaXmlString(array $attributesArr)
    {
        $dom = new DOMDocument('1.0', 'utf-8');
        $root = $dom->createElement("serviceSchema");
        foreach ($attributesArr as $attribute) {
            if ($attribute instanceof XMLAttribute) {
                $attribute->toElement($dom, $root);
            }
        }
        $dom->appendChild($root);
        return $dom->saveXML($dom->documentElement);
    }
}