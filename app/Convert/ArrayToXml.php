<?php

namespace App\Convert;

class ArrayToXml implements ConvertArrayInterface
{
    public static function convert($array)
    {
        $xml_data = new \SimpleXMLElement('<?xml version="1.0"?><data></data>');
        self::array_to_xml($array, $xml_data);
        return($xml_data->asXML());
    }

    private static function array_to_xml($data, &$xml_data)
    {
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                $key = 'item'.$key;
            }
            if (is_array($value)) {
                $subnode = $xml_data->addChild($key);
                self::array_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }
}
