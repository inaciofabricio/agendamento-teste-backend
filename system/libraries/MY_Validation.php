<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Validation extends CI_Form_validation{

    function __construct()
    {
        parent::CI_Validation();
    }


    function valid_date($str)
    {
        if ( preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})\Z/", $str) ) 
        {
            $arr = explode("/", $str);    
            $yyyy = $arr[2];           
            $mm = $arr[0];              
            $dd = $arr[1];      
            return ( checkdate($mm, $dd, $yyyy) );
        } 
        else 
        {
            return FALSE;
        }
    }
} // end class 