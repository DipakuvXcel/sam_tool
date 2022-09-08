<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('divider')){
    function divider($number_of_digits) {
        $tens="1";

    if($number_of_digits>8)
        return 10000000;

    while(($number_of_digits-1)>0)
    {
        $tens.="0";
        $number_of_digits--;
    }
    return $tens;
    }
}
?>