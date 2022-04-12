<?php 
declare(strict_types=1);
session_start();
if(!isset($_SESSION['user'])) {
   header("location: log_reg.php");
}


require 'vendor/autoload.php';
$secret = 'XVQ2UIGO75XRUKJO';
$link = \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('eBinhi', $secret, 'eBinhiAuth');






include_once('controller/googleController.php');
include_once('PHPGangsta/GoogleAuthenticator.php');

$authenticator = new PHPGangsta_GoogleAuthenticator();
$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();

?>

<?php
$error = "";
if(isset($_POST['submit'])){
   $pass = $_POST['code'];
   

   if ($g->checkCode($secret, $pass)) {
      
      if(isset($_SESSION['user'])) {
         if($_SESSION['role'] == 'admin') {
            header('Location: admin/index.php');
         } else if($_SESSION['role'] == 'vendor') {
            header('Location: vendor/index.php');
         } else if($_SESSION['role'] == 'customer') {
            header('Location: user_home.php');
         }
      }
   } else {
         $error = "Error Authentication Code";
   }


   
}






?>




<?php
 include_once 'header.php';
?>

<style type="text/css">
    <?php
     include 'css/log_reg.css';
    ?>
   </style> 


<!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide h-100" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner/farmerhands.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1>Verify Authentication Code</h1>
      </div>
    </div>
</div>
<hr>
   
<!-- END OF CAROUSEL -->


<div class="col-sm-12">
   <div class="alert  alert-danger alert-dismissible fade show" role="alert" <?php if(empty($error)) echo "hidden"; ?>>
         <span><?php echo $error?></span>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
   </div>
</div>






<div class="container login-container">
   <div class="">
      <h3></h3>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <img src="<?php echo $link; ?>" alt="QR Code">
            
            <div class="form-group">
               <input type="text" class="form-control" placeholder="secret" value="" name="secret" disabled hidden/>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Code" name="code"/>
            </div>
            
            <div class="form-group row">
               <input type="submit" class="btn btn-primary" value="Submit" name="submit"/>
            </div>      
      </form>
   </div>
</div>

<?php
include_once 'footer.php';
?>