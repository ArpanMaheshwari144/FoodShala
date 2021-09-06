<?php include('header.php')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Features Section -->
<style>
.text-light {
    color: white;
}

.menu-item-price {
    margin-left: -200px;
}
</style>
<div class="container"><br />
    <h2>Menu Foods</h2>
    <hr />
    <div class="row">
        <div class="col-md-8">
            <h4>Food</h4>
            <div class="row">
                <?php foreach ($data as $row) : ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <img width="200" src="https://www.cityofhope.org/image/meals-256x256.jpg">

                            <h4><?php echo $row->dish_name;?></h4>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4><?php echo number_format($row->dish_price);?></h4>
                                    <div class="col-md-5 col-md-offset-3">
                                        <?php if($row->dish_food_type == "non_veg"){?>
                                        <p style="width:10px; height:10px; background-color:red;"></p>
                                        <?php }else{?>
                                        <p style="width:10px; height:10px; background-color:green;"></p>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row->id;?>" value="1"
                                        class="quantity form-control">
                                </div>
                            </div>
                            <?php if($this->session->userdata('user_role') == '2'):?>
                            <button class="add_cart btn btn-success btn-block" data-productid="<?php echo $row->id;?>"
                                data-productname="<?php echo $row->dish_name;?>"
                                data-productprice="<?php echo $row->dish_price;?>">ORDER</button>
                            <?php else: ?>
                            <?=  anchor('welcome/loginlink',"ORDER",array('class' =>'add_cart btn btn-success btn-block') );?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>

        </div>
        <div class="col-md-4">
            <h4>Your Order List</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">

                </tbody>

            </table>
        </div>
    </div>
</div>
<div id="features" class="text-center">
    <div class="container">
        <div class="section-title">
            <h2>Top Rating Restaurants</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="features-item">
                    <h3>Punjabi Tadka</h3>

                    <img src="https://media.istockphoto.com/photos/interior-of-cozy-restaurant-loft-style-picture-id843610508?k=6&m=843610508&s=612x612&w=0&h=41DLQdNj3YtjIbSUQtX2zEvdJHAdHAq5c1MVS37VNzo="
                        class="img-responsive" alt="">
                    <p>Delhi</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="features-item">
                    <h3>Hayate</h3>
                    <img src="https://media.istockphoto.com/photos/interior-of-cozy-restaurant-loft-style-picture-id843610508?k=6&m=843610508&s=612x612&w=0&h=41DLQdNj3YtjIbSUQtX2zEvdJHAdHAq5c1MVS37VNzo="
                        class="img-responsive" alt="">
                    <p>Delhi</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="features-item">
                    <h3>Renaissance</h3>
                    <img src="https://media.istockphoto.com/photos/interior-of-cozy-restaurant-loft-style-picture-id843610508?k=6&m=843610508&s=612x612&w=0&h=41DLQdNj3YtjIbSUQtX2zEvdJHAdHAq5c1MVS37VNzo="
                        class="img-responsive" alt="">
                    <p>Delhi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Restaurant Menu Section -->
    <div id="restaurant-menu">
        <div class="container">
            <div class="section-title text-center">
                <h2>Menu</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Veg.</h2>
                        <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://www.cityofhope.org/image/meals-256x256.jpg'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
            echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
            echo "</div>";
            }
           }
             ?>


                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Non Veg</h2>

                        <?php
            foreach($data as $row)
            {
            if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb_DyLrgdoLj3lxmgDFC29GO79uF6dSQW91lSZ6UEEOgzXLMJ-'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
             if($this->session->userdata('user_role') == "2"){
              echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
             }
          echo "</div>";
            }
            }
             ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Drinks</h2>
                        <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "drinks")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0gV3p7k_TJgtGiw5OxRUoqEdAApcXGLyn5Lbvdvlw5pMjxXXdyw'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
            echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
            echo "</div>";
            }
           }
             ?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Desserts</h2>
                        <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "desserts")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='http://images.bigoven.com/image/upload/t_recipe-256/dirt-pie.jpg'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
            echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
            echo "</div>";
            }
           }
             ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 about-img"> </div>
                <div class="col-xs-12 col-md-3 col-md-offset-1">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>Our Story</h2>
                        </div>
                        <p>FoodShala is well recognised website. It is trust worthy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container text-center">
            <div class="col-md-4">
                <h3>Reservations</h3>
                <div class="contact-item">
                    <p>Please call</p>
                    <p>+91-7991377996</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Address</h3>
                <div class="contact-item">
                    <p>XYZ FLOOR 9 DLF,</p>
                    <p>GURGOAN, INDIA 122001</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Opening Hours</h3>
                <div class="contact-item">
                    <p>Mon-Thurs: 09:00 AM - 11:00 PM</p>
                    <p>Fri-Sun: 09:00 AM - 02:00 AM</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <h3>Send us a message</h3>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name"
                                    required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email"
                                    required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"
                            required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>