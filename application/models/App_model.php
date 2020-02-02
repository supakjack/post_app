<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function get_config($type, $file)
    {
        $this->config->load($file);
        return $this->config->item($type);
    }
}
    
    /* End of file App_model.php */
