<?php
defined('BASEPATH') or exit('No direct script access allowed');
interface App_model_interface
{
    public function insert();
    public function delete();
    public function update();
    public function select();
    public function like();
}

/* End of file App_model.php */
