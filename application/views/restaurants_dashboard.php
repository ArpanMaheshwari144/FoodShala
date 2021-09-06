<?php include('restaurants_header.php')?>
<style>
body {
    margin-top: -100px;
}

.text-light {
    color: white;
}

.float-right {
    float: right;
    margin-right: 10px;
}

.border {
    padding: 10px;
    border: 1px solid green;
}

.name {
    font-weight: 400;
    font-size: 20px;
    color: #444;
    margin-bottom: 10px;
}

.price {
    font-weight: 200;
    color: #555;
    margin-top: 10px;
}
</style>
<center>
    <div style="color:green; font-size:30px;"><?php echo $this->session->flashdata('msg');?></div>
    <center>

        <!-- Features Section -->
        <div id="features" class="restaurant-menu" class="text-center">

            <div class="container">
                <div class="section-title text-center">
                    <h2>Recently Got Order</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="menu-section">
                            <h2 class="menu-section-title">Veg Order</h2>
                            <?php
            foreach($data1 as $row)
            {
             if($row->dish_food_type == "veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='btn btn-success float-right'><a class='text-light' href='#'>Accept</a></div>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Quantity:</b> ".$row->quantity."</div>";
            echo "</div><br><br>";
            }
           }

             ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="menu-section">
                            <h2 class="menu-section-title">Non Veg Order</h2>
                            <?php
            foreach($data1 as $row)
            {
             if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='btn btn-success float-right'><a class='text-light' href='#'>Accept</a></div>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Quantity:</b> ".$row->quantity."</div>";
            echo "<div class='menu-item-description'> <b>Address:</b>  XXXXXXX </div>";
            echo "</div><br><br>";
            }
           }
             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Restaurant Menu Section -->
        <div id="restaurant-menu">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Your Restaurant Menu</h2>
                    <div class="btn btn-primary" style="color:white; width:200px; height:50px; font-size:20px;">
                        <?=  anchor('restaurant/add_new_iteam',"Add Iteam",array('class' =>'text-light') );?></div>
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
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
           }
             ?>


                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="menu-section">
                            <h2 class="menu-section-title">Non Veg</h2>
                            <div class="menu-item">
                                <div class="menu-item-img"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDF6Ini4fr8ye7TCJrC3QkvDfX8z55D0VbqTdiDjRSVaRRjVXz">
                                </div>
                                <div class="menu-item-name">Roast Stuffed Chicken</div>
                                <div class="menu-item-price"> Rs 180 </div>
                                <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit, duis sed dapibus leo nec ornare diam. </div>
                            </div>
                            <?php
            foreach($data as $row)
            {
            if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://www.cityofhope.org/image/meals-256x256.jpg'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
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
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
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
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
           }
             ?>

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