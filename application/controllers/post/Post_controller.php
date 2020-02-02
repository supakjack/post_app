<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'controllers/App_controller.php';
require APPPATH . 'controllers/post/Post_builder.php';
class Post_controller extends App_controller
{

	public function __construct()
	{
		parent::__construct('post_config');
	}

	public function show($method = null)
	{
		$data['controller_route'] = $this->controller_route;

		$pot_post = $this->input->post('pot_post');
		$pot_id = $this->input->post('pot_id');

		$this->load->model($this->model . 'Posts_model', 'mps');

		if (!$method) {
			if ($pot_post) {
				$this->mps->pot_post = $pot_post;
				$rs_get_by_post = $this->mps->get_by_post();
				$data['posts'] = $rs_get_by_post;
			} else {
				$rs_get_all_post = $this->mps->get_all_post();
				$data['posts'] = $rs_get_all_post;
			}
		} else {
			if ($method == "add") {
				$this->mps->pot_post = $pot_post;
				$this->mps->add_post();
			} else if ($method == "report") {
				$this->mps->pot_id = $pot_id;
				$this->mps->send_report();
			}
			redirect($this->controller_route, 'refresh');
		}

		$this->builder_director(new Post_builder)->output_global_script($this->view . 'v_post', $data);
	}
}
