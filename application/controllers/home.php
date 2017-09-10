<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$page = 'home';
        $title = 'Home';
		$this->load->view('layouts/main-layout', compact('page','title'));
	}
	public function wazzer() {
        $page_data = [];
	    $this->load->view('index', $page_data);
	}
}