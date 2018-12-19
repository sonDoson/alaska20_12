<?php
namespace App\Sources\Cls\WebClass\Func\Method\etc;
class FormatTime{
    public static function formatTimeByName($time){ 
        //time
        $M = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Sept', 'Oct', 'Nov', 'Dec'];
        $date = explode(" ", $time);
        $date = explode("-",$date[0]);
        $date_format['string'] = $date[2] . ' ' . $M[(int)$date[1] - 1] . ' ' . $date[0];
        $date_format[0] = $date[2];
        $date_format[1] = $M[(int)$date[1] - 1];
        $date_format[2] = $date[0];
        return $date_format;
    }
}