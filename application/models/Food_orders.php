<?php

Class Food_orders extends CI_Model {

// Insert new food/dish data in database
public function order_insert($dish_id,$quantity,$user_id)
{
  $order_number = 100 + $dish_id;
  $order_restaurants_food_id = $dish_id;
  $order_by_customers_user_id = $user_id;
  $query=$this->db->query("select * from `restaurants_dish` where `id` = $dish_id");
  foreach ($query->result() as $row) {
      $order_to_restaurants_user_id = $row->restaurant_user_id;
  };
  $status = 0;
  $data1 = array(
  'order_number' => $order_number,
  'order_restaurants_food_id' => $order_restaurants_food_id,
  'order_by_customers_user_id' => $order_by_customers_user_id,
  'order_to_restaurants_user_id' => $order_to_restaurants_user_id,
  'quantity' => $quantity,
  'status' =>$status
  );
  $this->db->insert('food_order', $data1);

  return true;


}
function user_orders($user_id)
{

$query=$this->db->query("select food_order.id, restaurants_dish.dish_name, restaurants_dish.dish_price, food_order.quantity FROM restaurants_dish INNER JOIN food_order ON restaurants_dish.id = food_order.order_restaurants_food_id where `order_by_customers_user_id` = $user_id ORDER BY food_order.id;");
return $query->result();
}
function restaurant_user_orders_recieve($user_id)
{
$query=$this->db->query("select food_order.id, restaurants_dish.dish_food_type,restaurants_dish.dish_name, restaurants_dish.dish_price, food_order.quantity FROM restaurants_dish INNER JOIN food_order ON restaurants_dish.id = food_order.order_restaurants_food_id where `order_to_restaurants_user_id` = $user_id ORDER BY food_order.id;");
return $query->result();
}
function delete_user_orders($order_id)
{
$query=$this->db->query("delete from food_order where id= $order_id ");
return $query->result();
}
function welcomedisplaymenuiteam()
{

$query=$this->db->query("select * from `restaurants_dish` order by id DESC LIMIT 0, 30");
return $query->result();
}

}
