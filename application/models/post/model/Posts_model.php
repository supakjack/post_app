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
        $this->load->model('post/da/Da_posts','dps');
        $this->dps->pot_post = 
        $query = $this->dps->select();
        $query = $query->result();
        return $query;
    }

    public function get_by_post()
    {
        $this->load->model('post/da/Da_posts','dps');
        $this->dps->pot_post = $this->pot_post;
        $query = $this->dps->like();
        $query = $query->result();
        return $query;
    }

    public function add_post()
    {
        $this->load->model('post/da/Da_posts','dps');
        $this->dps->pot_post = $this->pot_post;
        $query = $this->dps->insert();
        return $query;
    }
    
}

/* End of file Da_posts.php */
