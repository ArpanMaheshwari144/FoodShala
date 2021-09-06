<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authcontroller extends CI_Controller {
	function __construct(){
    parent::__construct();
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('restaurants_dish');
		$this->load->model('Food_orders');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');


    }
  }
	function index(){
    //Allowing akses to admin only
      if($this->session->userdata('user_role')==='1'){
				$user_id = $this->session->userdata('user_id');
				$result['data']=$this->restaurants_dish->displaymenuiteam($user_id);
				$result['data1']=$this->Food_orders->restaurant_user_orders_recieve($user_id);
        $this->load->view('restaurants_dashboard',$result);
      }elseif($this->session->userdata('user_role')==='2'){
				$result['data']=$this->restaurants_dish->welcomedisplaymenuiteam();
				$this->load->view('welcome_message',$result);
      }else{
          echo "Access Denied";
      }

  }


}
