<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'models/interfaces/App_model_interface.php';
require APPPATH . 'models/App_model.php';

class Da_posts extends App_model implements App_model_interface
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
        $this->db->set('pot_post', $this->pot_post);
        $query = $this->db->insert('posts');
        return $query;
    }

    public function delete()
    {
        $this->db->where('pot_id', $this->pot_id);
        $query =  $this->db->delete('posts');
        return $query;
    }

    public function update()
    {
        $this->db->set('pot_post', $this->pot_post);
        $this->db->set('pot_stamp', $this->pot_stamp);
        $this->db->set('pot_report', $this->pot_report);
        $this->db->where('pot_id', $this->pot_id);
        $query = $this->db->update('posts');
        return $query;
    }

    public function select()
    {
        if ($this->pot_id) {
            $this->db->where('pot_id', $this->pot_id);
        }
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
