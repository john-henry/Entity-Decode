<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Entity_decode {

    /*
    * @var  string  The plugin return data
    */
    public $return_data

    /*
    * @var  string  Character set identifier
    */
    private $charset = 'UTF-8';

    /**
    * Constructor
    *
    * @access  public
    * @return  void
    */

   public function __construct($str = '')
    {
        if(empty($str))
        {
          $str = ee()->TMPL->tagdata;
        }
        $this->return_data = ee('Security/XSS')->entity_decode($str, $charset);
    }
    
    // ------------------------------------------------------------------------
}
// END CLASS
// EOF
