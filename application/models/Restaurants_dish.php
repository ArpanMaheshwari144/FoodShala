<?php

Class Restaurants_dish extends CI_Model {

// Insert new food/dish data in database
public function food_insert($data)
{

// Query to check whether dish already exist or not

$condition = "dish_name =" . "'" . $data['dish_name'] . "'";
$condition1 = "restaurant_user_id =" . "'" . $data['restaurant_user_id'] . "'";
$this->db->select('*');
$this->db->from('restaurants_dish');
$this->db->where($condition);
$this->db->where($condition1);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 0) {

// Query to insert data in database
$this->db->insert('restaurants_dish', $data);


if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

function displaymenuiteam($user_id)
{
$restaurant_user_id= $user_id;
$query=$this->db->query("select * from `restaurants_dish` where `restaurant_user_id` = $restaurant_user_id");
return $query->result();
}
function welcomedisplaymenuiteam()
{

$query=$this->db->query("select * from `restaurants_dish` order by id DESC LIMIT 0, 30");
return $query->result();
}

}
