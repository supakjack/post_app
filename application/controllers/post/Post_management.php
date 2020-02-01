<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'controllers/App_controller.php';

class Post_management extends App_controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->output('v_post');
	}

	public function test_select($id = null)
	{

		$this->load->model('post/model/Posts_model', 'mps');
		$rs_all_post = $this->mps->get_all_post();
		$response = $rs_all_post;
		$search = false;
		if ($id) {
			foreach ($rs_all_post as $value) {
				if ($value->pot_id == $id) {
					$response = $value;
					$search = true;
				}
			}
			var_dump($search ? $response : null);
			return;
		}
		var_dump($response);
		return;
	}

	public function test_search($pot_post=null)
	{
		$pot_post = "ห"; // test
		$this->load->model('post/model/Posts_model', 'mps');
		$this->mps->pot_post = $pot_post;
		$rs_all_post = $this->mps->get_by_post();
		$response = $rs_all_post;
		var_dump($response);
		return;
	}

	public function test_insert()
	{
		$this->load->model('post/model/Posts_model', 'mps');
		$this->mps->pot_post = "นม";
		$qu_add_post = $this->mps->add_post();
		var_dump($qu_add_post);
		return;
	}
}
