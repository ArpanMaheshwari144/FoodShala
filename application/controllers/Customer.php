<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct(){
    parent::__construct();
		// Load form helper library
    $this->load->helper('form');
		// Load form validation library
    $this->load->library('form_validation');
		// Load session library
    $this->load->library('session');
    // Load database
    $this->load->model('login_model');

     $this->load->model('customers');
		 $this->load->model('restaurants_dish');

  }
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		 $result['data']=$this->restaurants_dish->displaymenuiteam($user_id);
				$this->load->view('customers_dashboard',$result);

	}
	//after if time remain  Validate and Now store registration data in database
	public function users_registration() {


	$user_role = 2;
	$data = array(
	'user_name' => $this->input->post('user_name'),
	'user_email' => $this->input->post('user_email'),
	'user_mobile' => $this->input->post('user_mobile'),
	'user_password' => md5($this->input->post('user_password')),
	'user_role' => $user_role
	);
	$prefer_food_type = $this->input->post('prefer_food_type');
	$result = $this->customers->registration_insert($data,$prefer_food_type);
	if ($result == TRUE) {
	echo $this->session->set_flashdata('msg','Registration Successfully ! ');
	$this->load->view('login');
	} else {
	echo $this->session->set_flashdata('msg','Username already exist!');

	$this->load->view('login');
	}


	}

}
