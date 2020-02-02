<?php
require APPPATH . 'models/post/da/Da_posts.php';
defined('BASEPATH') or exit('No direct script access allowed');

class Posts_model extends Da_posts
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_post()
    {
        $this->load->model($this->get_config('da','post_config') . 'Da_posts', 'dps');
        $query = $this->dps->select();
        $query = $query->result();
        return $query;
    }

    public function get_by_post()
    {
        $this->load->model($this->get_config('da','post_config') . 'Da_posts', 'dps');
        $this->dps->pot_post = $this->pot_post;
        $query = $this->dps->like();
        $query = $query->result();
        return $query;
    }

    public function add_post()
    {
        $this->load->model($this->get_config('da','post_config') . 'Da_posts', 'dps');
        $this->dps->pot_post = $this->pot_post;
        $query = $this->dps->insert();
        return $query;
    }

    public function send_report()
    {
        $this->load->model($this->get_config('da','post_config') . 'Da_posts', 'dps');
        $this->dps->pot_id = $this->pot_id;
        $query = $this->dps->select();
        $qu_post = $query->result()[0];
        if ($qu_post->pot_report > 4) {
            $query = $this->dps->delete();
        } else {
            $qu_post->pot_report++;
            $this->dps->pot_stamp = $qu_post->pot_stamp;
            $this->dps->pot_post = $qu_post->pot_post;
            $this->dps->pot_report = $qu_post->pot_report;
            $query = $this->dps->update();
        }
        return $query;
    }
}

/* End of file Da_posts.php */
