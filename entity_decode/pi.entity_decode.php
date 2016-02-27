<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entity_decode {

    var $return_data;
    var $charset = 'UTF-8';

    function __construct($str = '')
    {
        if(empty($str))
        {
	        $str = ee()->TMPL->tagdata;
        }
        $this->return_data = ee('Security/XSS')->entity_decode($str, $charset);
    }
}
