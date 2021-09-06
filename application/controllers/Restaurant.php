<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {
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

		$this->load->model('restaurants');
		$this->load->model('Food_orders');

    $this->load->model('restaurants_dish');

  }


	//home
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		 $result['data']=$this->restaurants_dish->displaymenuiteam($user_id);
		 $result['data1']=$this->Food_orders->restaurant_user_orders_recieve($user_id);
	   $this->load->view('restaurants_dashboard',$result);

	}

   //add_new_link
	public function add_new_iteam()
	{
		$this->load->view('restaurants_add_new_iteam');
	}


	//signup retaurants
	public function users_registration() {

	$user_role = 1;
	$data = array(
	'user_name' => $this->input->post('user_name'),
  'user_email' => $this->input->post('user_email'),
	'user_mobile' => $this->input->post('user_mobile'),
	'user_password' => md5($this->input->post('user_password')),
	'user_role' => $user_role
	);
	$restaurant_name = $this->input->post('restaurant_name');
	$restaurant_mobile = $this->input->post('user_mobile');
	$restaurant_location = $this->input->post('restaurant_location');

	$result = $this->restaurants->registration_insert($data,$restaurant_name,$restaurant_location,$restaurant_mobile);
	if ($result == TRUE) {
	echo $this->session->set_flashdata('msg','Registration Successfully ! ');
	$this->load->view('login');
	} else {
	echo $this->session->set_flashdata('msg','Username already exist!');

	$this->load->view('login');
	}


	}


	//Add Food In retaurants Menu
	public function add_food() {


	$user_id = $this->session->userdata('user_id');
	$data = array(
	'dish_name' => $this->input->post('dish_name'),
  'dish_price' => $this->input->post('dish_price'),
	'dish_description' => $this->input->post('dish_description'),
	'dish_food_type' => $this->input->post('dish_food_type'),
	'restaurant_user_id' => $user_id
	);
	$result = $this->restaurants_dish->food_insert($data);

	if ($result == TRUE) {
	echo $this->session->set_flashdata('msg','Food Add Successfully ! Add More ');
	$this->load->view('restaurants_add_new_iteam');
	} else {
	echo $this->session->set_flashdata('msg','Food Name already exist!');

	$this->load->view('restaurants_add_new_iteam');
	}


	}

}
