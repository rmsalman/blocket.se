<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_Authentication extends CI_Controller
{
    function __construct() {
		parent::__construct();
		
		// Load facebook library
		$this->load->library('facebook');
		$this->load->library('form_validation');
		//Load user model
		$this->load->model('user');
    }
    
    public function index(){
		$userData = array();
		
		// Check if user is logged in
		if($this->facebook->is_authenticated()){
			error_reporting(0);
			// Get user facebook profile details
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
			
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
			
			// Check user data insert or update status
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
            } else {
               $data['userData'] = array();
            }
			
			// Get logout URL
			$data['logoutUrl'] = $this->facebook->logout_url();
		}
		else if(!empty($this->session->userdata('username'))){
			redirect(base_url());
		}
		else{
            $fbuser = '';
			
			// Get login URL
            $data['authUrl'] =  $this->facebook->login_url();
        }
        $page = 'login'; 
		$this->load->view('layouts/login-layout', array('page' => $page , 'data' => $data));
    }

	public function logout() {
		// Remove local Facebook session
		$this->facebook->destroy_session();
		// Remove user data from session
		$this->session->unset_userdata('userData');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		// Redirect to login page
        redirect(base_url());
    }

    public function login(){
    	$data = array();
    	if($this->input->post('submit')){
    		$this->form_validation->set_rules('username', 'User name', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run()) {
                if($this->user->custom_login($this->input->post('username'),$this->input->post('password'))){
                	$data['success'] = "Login successfull";
                	$this->session->set_userdata(array('username' => $this->input->post('username') , 'password' => $this->input->post('password')));
                }
                else{
                	$data['authUrl'] = $this->facebook->login_url();
                	$data['error'] = "Username or password incorrect";
                }
            }
        $page = 'login';
    	$this->load->view('layouts/login-layout', array('page' => $page, 'data' => $data));
    	}
    	else{
    		redirect('/user_authentication');
    	}
    }

    public function signup(){
    	$data = array();
    	if($this->input->post('submit')){
    		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[255]');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');
            $this->form_validation->set_rules('subrole', 'Sub Role', 'trim|required');
            $this->form_validation->set_rules('phone', 'Contact No', 'trim|required');
            if ($this->form_validation->run()) {
            	$data = [
            	'first_name' => $this->input->post('fname'),
            	'last_name' => $this->input->post('lname'),
            	'username' => $this->input->post('username'),
            	'password' => crypt($this->input->post('password'),"+#23%,a92*"),
            	'email' => $this->input->post('email'),
            	'role' => $this->input->post('role'),
            	'subrole' => $this->input->post('subrole'),
            	'phone' => $this->input->post('phone'),
            	];
            	if($this->user->signup($data)){
            	$data['success'] = "Data inserted successfully";
            	$this->session->set_userdata('username',$this->input->post('username'));
            	}
            	else{
            		$data['error'] = "Error While proccessing request";
            	}
            }
            else{
            	$data['error'] = validation_errors();
            }
    	}else if(!empty($this->session->userdata('username'))){
    		redirect('/user_authentication');
    	}
    	$page = 'signup';
    	$this->load->view('layouts/login-layout', array('page' => $page, 'data' => $data));
    }
}
