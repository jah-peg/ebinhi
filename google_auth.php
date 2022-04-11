<?php 

session_start();
if(!isset($_SESSION['user'])) {
   header("location: ../log_reg.php");
}

include_once 'controller/googleController.php';
include_once 'PHPGangsta/GoogleAuthenticator.php';


?>
<?php
$google_fa = new PHPGangsta_GoogleAuthenticator();

$secret = $google_fa->createSecret();

$qrCodeUrl = $google_fa->getQRCodeGoogleUrl('User', $secret);

$code = $google_fa->getCode($secret);

if(isset($_POST['submit'])) {
   $google_sql = "INSERT INTO google_fa(user_id, secret_code, pin) VALUES('".$_SESSION['user']."', '$secret', '$code')";

   $google_result = $googleC->create_code($google_sql);

   if($google_result) {
      echo '<script> alert("Success!") </script>';
      header("location: index.php");
  }
}
?>
<?php include_once 'header.php'; ?>
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
   <div class="col-md-6 regi-form">
      <h3></h3>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <img src="<?php if(isset($_POST['generate'])) echo $qrCodeUrl; ?>" alt="QR Code">
            
            <div class="form-group">
               <input type="text" class="form-control" placeholder="secret" value="" name="secret" disabled hidden/>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Code" value="<?php if(isset($_POST['generate'])) echo $code; ?>" name="code" disabled/>
            </div>
            
            <div class="form-group">
               <input type="submit" class="btnSubmit" value="Submit" name="submit"/>
               <input type="submit" class="btnSubmit" value="Generate" name="generate"/>
            </div>      
      </form>
   </div>
</div>



<?php include_once 'footer.php'; ?>