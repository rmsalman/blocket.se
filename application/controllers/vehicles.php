<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehicles extends CI_Controller {
    public function index()
    {
        $page = 'vehicle-main';
        $title = 'Vehicle';
        $this->load->view('layouts/vehicle-layout', compact('page','title'));
    }

    public function  place_ad() {
        $page = 'vehicle-place_ad';
        $title = 'Vehicle';
        $this->load->view('layouts/vehicle-layout', compact('page','title'));
    }
}