<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {
	public function index(){
		$page = "jobs";
        $title = 'Jobs';
		$this->load->view('layouts/jobs-layout', compact('title','page'));
	}
}