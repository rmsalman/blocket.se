<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {
	public function index(){
		$page = "jobs";
		$this->load->view('layouts/jobs-layout',array('page' => $page));
	}
}