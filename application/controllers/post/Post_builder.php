<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'controllers/Builder_controller.php';
class Post_builder extends Builder_controller
{
	public function __construct()
	{
		parent::__construct('post_config');
	}
	
}
