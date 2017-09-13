<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Place_ad extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function add_ad($data) {
        $gen_posts = 'gen_posts';
        $post_id = $this->db->inset($gen_posts, $data);
        return $post_id?$post_id:FALSE;
    }

    public function add_residence_part($data) {
        $residence_part = 'residence_part';
        $residence_id = $this->db->inset($residence_part, $data);
        return $residence_id?$residence_id:FALSE;
    }

    public function add_garments_part($data) {
        $garments_part = 'garments_part';
        $garments_part_id = $this->db->inset($garments_part, $data);
        return $garments_part_id?$garments_part_id:FALSE;
    }

    public function add_vehicles_part($data) {
        $vehicles_part = 'vehicles_part';
        $vehicles_part_id = $this->db->inset($vehicles_part, $data);
        return $vehicles_part_id?$vehicles_part_id:FALSE;
    }

}
