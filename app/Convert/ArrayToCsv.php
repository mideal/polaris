<?php

namespace App\Convert;

class ArrayToCsv implements ConvertArrayInterface
{
    private static $csv_header;
    private static $csv_body;
    private static $csv;
    
    public static function convert($array)
    {
        foreach ($array as $key => $value) {
            self::toLine($value['products']);
        }
        self::$csv .= self::$csv_header;
        self::$csv .= self::$csv_body;
        return self::$csv;
    }

    private static function toLine($array)
    {
        foreach ($array as $key => $value) {
            if (isset($value[0]) && is_array($value[0])) {
                self::toLine($value);
            } else {
                self::arrayToCsv($value);
            }
        }
    }
    private static function arrayToCsv($array)
    {
        $f = fopen('php://memory', 'r+');
        fputs($f, chr(0xEF) . chr(0xBB) . chr(0xBF));
        if (fputcsv($f, $array) === false) {
            return false;
        }
        rewind($f);
        $csv_line = stream_get_contents($f);
        self::$csv_header = implode(',', array_keys($array))."\n";
        self::$csv_body .= $csv_line;
    }
}
