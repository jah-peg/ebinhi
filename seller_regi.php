<?php
 include_once 'header.php';
?>
    <style type="text/css">
    <?php
     include 'css/seller_regi.css';
    ?>
   </style> 
<!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide h-100" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner/farmerhands.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1>Seller Registration</h1>
        <p>Be part of our growing vendors.</p>
        
      </div>
    </div>
</div>
</div>
</div>
   
<!-- END OF CAROUSEL -->


<!-- REGISTRATION -->

<form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

 	<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="" name="uname" id="uname" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="" name="email" id="email" required>
    
    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="" name="firstname" id="firstname" required>
    
    <label for="laststname"><b>Last Name</b></label>
    <input type="text" placeholder="" name="lastname" id="lastname" required>
    
    <label for="storename"><b>Store Name</b></label>
    <input type="text" placeholder="https://www.eBinhi.da.gov.ph/shop/[your_store]" name="firstname" 			id="firstname" required>
    
    <label for="address_1"><b>Address 1</b></label>
    <input type="text" placeholder="" name="address_1" id="address_1" required>
    
    <label for="address_2"><b>Address 2</b></label>
    <input type="text" placeholder="" name="address_2" id="address_2" required>
    
    <label for="country"><b>Country</b></label>
    <input type="text" placeholder="" name="country" id="country" required>
    
    <label for="city_town"><b>City/Town</b></label>
    <input type="text" placeholder="" name="city_town" id="city_town" required>
    
    
    <label for="postcode"><b>Postcode/Zip</b></label>
    <input type="text" placeholder="" name="postcode" id="postcode" required>
    
    <label for="s_phone"><b>Store Phone</b></label>
    <input type="text" placeholder="" name="s_phone" id="s_phone" required>
    
    <label for="city_town"><b>City/Town</b></label>
    <input type="text" placeholder="" name="city_town" id="city_town" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    
    <label for="file"><b>Upload your store Profile Picture</b></label><br>
    <input type="file" id="myFile" name="filename">
  
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="log_reg.php">Sign in</a>.</p>
  </div>
</form>
</div>


<?php
include_once 'footer.php';
?>

<!-- END OF REGISTRATION -->
