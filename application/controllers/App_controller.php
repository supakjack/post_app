<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function output($view, $data = null, $return = false)
	{
		if (!$return) {
			$this->load->view('templates/header', $data, $return);
			$this->load->view($view, $data, $return);
			$this->load->view('templates/footer', $data, $return);
		} else {
			$txt = '';
			$txt .= $this->load->view('templates/header', $data, $return);
			$txt .= $this->load->view($view, $data, $return);
			$txt .= $this->load->view('templates/footer', $data, $return);
			return $txt;
		}
	}
}
