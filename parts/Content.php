<?php

/**
 * Description of Content
 *
 * @author sfeonix
 */
class Content
{
    public static function render($name, $data = array())
    {
        $string = self::getContent($name);
        $finalString = self::fillData($string, $data);
        
        return $finalString;
    }
    
    private static function getContent($name)
    {
        if (file_exists(__DIR__ . "/$name.content")) {
            return file_get_contents(__DIR__ . "/$name.content");
        } else if (file_exists(__DIR__ . "/$name.html")) {
            return file_get_contents(__DIR__ . "/$name.html");
        } else {
            return "";
        }
    }
    
    private static function fillData($string, $data)
    {
        if (count($data) <= 0) {
            return $string;
        } else {
            try {
                foreach ($data as $key => $val) {
                    $string = preg_replace("~{#$key}~i", $val, $string);
                }
            } catch (\Exception $e) {
                echo $e->getMessage();die;
            }
                
        }
    }
}
