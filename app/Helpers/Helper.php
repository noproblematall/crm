<?php
namespace App\Helpers;
use Cache;

class Helper
{

    public function __construct()
    {
        
    }

    public static function trim_string(String $value)
    {
        if (strlen($value) > 20) {
            return (substr($value, 0, 20)).'...';
        }else{
            return $value;
        }
    }

    public static function datalog($content){
        $filename = storage_path() . '\\datalogs\\datalogs.log';
        
        if ($handle = fopen($filename, 'a')) {
            if (fwrite($handle, $content . " \n") === FALSE) {
                return FALSE;
            }
            fclose($handle);
            return TRUE;
        }
        return FALSE;
    }

    
}
