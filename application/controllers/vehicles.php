<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehicles extends CI_Controller {



    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }


    public function index()
    {
        $page = 'vehicle-main';
        $title = 'Vehicle';
        $this->load->view('layouts/vehicle-layout', compact('page','title'));
    }

    public function  place_ad() {
        $page = 'vehicle-place_ad';
        $title = 'Vehicle';


        $this->form_validation->set_rules('name', 'Name', 'required|full_name');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('layouts/vehicle-layout', compact('page','title'));

        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        }





    }


    public function full_name ($name) {
        if ($str == trim($str) && strpos($str, ' ') !== false) {
            $this->form_validation->set_message('full_name','Name must contain both first and last name.');
            return false;
        }else {
         return true;
        }
    }
}