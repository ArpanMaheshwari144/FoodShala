<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	 function __construct(){
     parent::__construct();
		     // Load database
		 $this->load->model('restaurants_dish');
	 }
	public function index()
	{
		$result['data']=$this->restaurants_dish->welcomedisplaymenuiteam();
		$this->load->view('welcome_message',$result);
	}
	public function loginlink()
	{
		$this->load->view('login');
	}
	public function customers_signup()
	{
		$this->load->view('customers_signup');
	}
	public function restaurants_signup()
	{
		$this->load->view('restaurants_signup');
	}
}