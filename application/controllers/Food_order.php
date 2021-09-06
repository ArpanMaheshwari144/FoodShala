<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_order extends CI_Controller{

    function __construct(){
        parent::__construct();
				// Load session library
				$this->load->library('session');

        $this->load->model('Food_orders');
    }

    function index(){
        $data['data']=$this->Food_orders->welcomedisplaymenuiteam();
        $this->load->view('welcome_message',$data);
    }

    function add_to_cart(){
        if($this->session->userdata('user_id') && $this->session->userdata('user_role') == 2)
				{
					$dish_id =$this->input->post('product_id');
					$quantity = $this->input->post('quantity');
					$user_id = $this->session->userdata('user_id');
	        $this->Food_orders->order_insert($dish_id,$quantity,$user_id);
	        echo $this->show_cart();
				}

    }

    function show_cart(){
        $output = '';
        $no = 0;

				$user_id = $this->session->userdata('user_id');
				$data['data'] = $this->Food_orders->user_orders($user_id);
        foreach ($this->Food_orders->user_orders($user_id) as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items->dish_name.'</td>
                    <td>'.number_format($items->dish_price).'</td>
                    <td>'.$items->quantity.'</td>
                    <td>'.number_format($items->quantity * $items->dish_price).'</td>
                    <td><button type="button" id="'.$items->id.'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.$no.'</th>
            </tr>
        ';
        return $output;
    }

    function load_cart(){
        echo $this->show_cart();
    }

    function delete_cart(){
        $order_id = $this->input->post('row_id');
        $this->Food_orders->delete_user_orders($order_id);
        echo $this->show_cart();
    }
}
