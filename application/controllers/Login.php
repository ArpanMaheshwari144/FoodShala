<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
    parent::__construct();

		// Load session library
    $this->load->library('session');
    // Load database
    $this->load->model('login_model');

  }

	public function index()
	{
		$this->load->view('login');
	}



	function auth(){
		//after if time remain $this->form_validation->set_rules('email', 'Username', 'trim|required|xss_clean');
	//after if time remain	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $user_id  = $data['user_id'];
        $user_name  = $data['user_name'];
        $mobile = $data['user_mobile'];
        $email = $data['user_email'];
        $role = $data['user_role'];
        $sesdata = array(
            'user_id'  => $user_id,
		        'user_name'  => $user_name,
		        'user_mobile'  => $mobile,
            'user_email'     => $email,
            'user_role'     => $role,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for Restaurant
        if($role === '1'){
            redirect('/restaurant');

        // access login for customers
        }elseif($role === '2'){
            redirect('/');

        // access login for author
        }
    }else{
        echo $this->session->set_flashdata('msg','Email or Password is Wrong');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
}
