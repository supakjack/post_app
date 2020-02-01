<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Da_posts extends CI_Model
{

    public $pot_id;
    public $pot_stamp;
    public $pot_post;
    public $pot_report;

    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $query = $this->db->insert('posts', $this->pot_post);
        return $query;

    }

    public function delete()
    {
        $this->db->where('id', $this->pot_id);
        $query =  $this->db->delete('posts');
        return $query;

    }

    public function update()
    {
        $query = $this->db->replace('posts', $this);
        return $query;

    }

    public function select()
    {
        $query = $this->db->get('posts');
        return $query;
    }

    public function like()
    {
        $this->db->like('pot_post', $this->pot_post);
        $query = $this->db->get('posts');
        return $query;
    }
}

/* End of file Da_posts.php */
