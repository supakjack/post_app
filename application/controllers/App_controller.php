<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_controller extends CI_Controller
{
	public $controller_route;
	public $model;
	public $view;
	public $file_config;

	public function __construct($file_config)
	{
		parent::__construct();
		$this->config->load($file_config);
		$this->controller_route = $this->config->item('controller');
		$this->model = $this->config->item('model');
		$this->view = $this->config->item('view');
	}

	public function builder_director($director)
	{
		return $director;
	}
}
