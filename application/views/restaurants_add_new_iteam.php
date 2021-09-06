<?php include('restaurants_header.php')?>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
   z-index:5;
   margin-top: -400px;
}
.form1 {border: 3px solid #f1f1f1;}

input[type=text],input[type=email],input[type=number], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}







.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style><div>

<center><h2>Add New Iteam In Menu</h2></center>
<center>  <div style="color:red; font-size:20px;"><?php echo $this->session->flashdata('msg');?></div><center>

<form class="form1" action="<?php echo site_url('restaurant/add_food');?>" method="post">

  <div class="container">
    <div class="row form-group">
    <div class="col-md-6">
    <label for="user_name"><b>Food/Dish Name</b></label>
    <input type="text" placeholder="Enter Food/Dish Name"  name="dish_name" required>
    </div>
    <div class="col-md-6">
    <label for="restaurant_name"><b>Food/Dish Price</b></label>
    <input type="number" placeholder="Enter Food Price"  name="dish_price" required>
   </div>
    </div>
    <div class="row form-group">
    <div class="col-md-6">
    <label for="user_name"><b>Food Dish Description</b></label>
    <input type="text" placeholder="AbouT Food"  name="dish_description" required>
    </div>
    <div class="col-md-6">
    <label for="restaurant_name"><b>Food Dish Type</b></label><br><br>
    <div class="form-group">
      <input type="radio"  value="veg" name="dish_food_type" checked >Veg
      <input type="radio"  value="non_veg" name="dish_food_type" >Non Veg
      <input type="radio"  value="drinks" name="dish_food_type" >Drinks
      <input type="radio"  value="desserts" name="dish_food_type" >Desserts
    </div>
   </div>
    </div>


    <label>
    <button type="submit">Add Iteam</button>

  </div>


</form>
</div>

<?php include('footer.php'); ?>
