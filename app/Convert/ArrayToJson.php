<?php

namespace App\Convert;

class ArrayToJson implements ConvertArrayInterface
{
    public static function convert($array)
    {
        return json_encode($array, JSON_UNESCAPED_UNICODE| JSON_PRETTY_PRINT);
    }
}
