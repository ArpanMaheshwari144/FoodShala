<?php

Class Restaurants extends CI_Model {

// Insert registration data in database
public function registration_insert($data,$restaurant_name,$restaurant_location,$restaurant_mobile)
{

// Query to check whether username already exist or not

$condition = "user_email =" . "'" . $data['user_email'] . "'";
$this->db->select('*');
$this->db->from('tbl_users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('tbl_users', $data);
$insert_id = $this->db->insert_id();
$data1 = array(
'restaurant_name' => $restaurant_name,
'restaurant_location' => $restaurant_location,
'restaurant_mobile' => $restaurant_mobile,
'user_id' =>$insert_id
);
$this->db->insert('restaurants', $data1);

if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}




}
