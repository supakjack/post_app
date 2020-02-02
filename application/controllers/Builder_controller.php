<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Builder_controller extends CI_Controller
{
	public $template;
	public $script;
	public $file_config;


	public function __construct($file_config)
	{
		parent::__construct();
		$this->file_config = $file_config;
		$this->config->load($this->file_config);
		$this->template = $this->config->item('template');
		$this->script = $this->config->item('script');
	}


	public function output_no_script($view, $data = null, $return = false)
	{
		if (!$return) {
			$this->load->view($this->template . 'header', $data, $return);
			$this->load->view($view, $data, $return);
			$this->load->view($this->template . 'footer', $data, $return);
		} else {
			$txt = '';
			$txt .= $this->load->view($this->template . 'header', $data, $return);
			$txt .= $this->load->view($view, $data, $return);
			$txt .= $this->load->view($this->template . 'footer', $data, $return);
			return $txt;
		}
	}

	public function output_global_script($view, $data = null, $return = false)
	{
		if (!$return) {
			$this->load->view($this->template . 'header', $data, $return);
			$this->load->view($this->script . 'global', $data, $return);
			$this->load->view($view, $data, $return);
			$this->load->view($this->template . 'footer', $data, $return);
		} else {
			$txt = '';
			$txt .= $this->load->view($this->template . 'header', $data, $return);
			$txt .= $this->load->view($this->script . 'global', $data, $return);
			$txt .= $this->load->view($view, $data, $return);
			$txt .= $this->load->view($this->template . 'footer', $data, $return);
			return $txt;
		}
	}
}
