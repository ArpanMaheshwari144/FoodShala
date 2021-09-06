<?php

Class Customers extends CI_Model {

// Insert registration data in database
public function registration_insert($data,$prefer_food_type) {

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
'prefer_food_type' => $prefer_food_type,
'user_id' =>$insert_id
);
$this->db->insert('customers', $data1);

if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

}
