<?php 
   
   session_start();
   if(!isset($_SESSION['user'])) {
      header("location: ../log_reg.php");
   }

   include_once('controller/customerController.php');
   include_once('header.php');

   // fetch user information in the database
   $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";

   $result = $customer->profile_customers($sql);
   

?>

<!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide h-100" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner/farmerhands.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1>Generate Two-Factor Authentication</h1>
        
      </div>
    </div>
</div>
</div>
</div>
   
<!-- END OF CAROUSEL -->

<div class="container">

   <h1>This where your transactions as a user will take place</h1>

   <?php echo $result['username']; ?> <br>
   <?php echo $result['email']; ?> <br>
   <img src="uploads/<?php echo $result['photo']; ?>" alt=""> <br>
   <?php echo $result['phone']; ?> <br>
   <?php echo $result['address']; ?> <br>
   <?php echo $result['role']; ?> <br>
   <?php echo $result['status']; ?> <br>

   <p></p>

   <button><a href="logout.php">Logout</a></button>


</div>


<?php include_once('footer.php'); ?>