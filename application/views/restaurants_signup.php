<?php include('loginheader.php'); ?>

  <div>

<center><h2>Create An Restaurant Account</h2></center>

<form class="form1" action="<?php echo site_url('restaurant/users_registration');?>" method="post">

  <div class="container">
    <label for="user_name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name"  name="user_name" required>
    <label for="restaurant_name"><b>Restaurant Name</b></label>
    <input type="text" placeholder="Enter Restaurant Name"  name="restaurant_name" required>
    <label for="restaurant_location"><b>Restaurant Location</b></label>
    <input type="text" placeholder="Restaurant Location"  name="restaurant_location" required>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="user_email" required>
    <label for="mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="user_mobile" required>

    <label for="password"><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="user_password" required>
    <span id='message'></span>
    <label for="password-repeat"><b>Repeat Password</b></label>

    <input type="password" id="confirm_password" placeholder="Repeat Password" required>

    <label>
    <button type="submit">Signup</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  <span class="psw">Forgot <a href="#">password?</a></span>
   <div class=""><?= anchor('welcome/loginlink', "Login", array('class'=>'btn-lg btn-success'))?></div>
  </div>
</form>
</div>
<script>
$('#confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matched').css('color', 'green');
  } else
    $('#message').html('Not Matching').css('color', 'red');
});
</script>

<?php include('footer.php');?>
