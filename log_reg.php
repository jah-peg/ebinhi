<?php 
include_once('controller/database.php');
include_once('controller/customerController.php');


session_start();
$error = "";
// this is for login script
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypted_pass = password_hash($password, PASSWORD_BCRYPT);
    
    $verify_statement = $customer->verify_customer($username, $password);
    
    if(!$verify_statement) {
        $error = "Invalid Credentials!";
    } else {
        $row = mysqli_fetch_assoc($verify_statement);

        if($row['role'] == 'admin') {
            $_SESSION['user'] = $row['id'];
            $_SESSION['role'] = $row['role']; 
            header('Location: verify_auth_code.php');
        } else if ($row['role'] == 'vendor') {
            $_SESSION['user'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            header('Location: verify_auth_code.php');
        } else if ($row['role'] == 'customer') {
            $_SESSION['user'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            header('Location: verify_auth_code.php');
        }
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
        <h1>My Account</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
</div>
<hr>
   
<!-- END OF CAROUSEL -->


<!-- LOGIN/REGI FORM -->

<div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form">
                <h3>Login</h3>
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email or Username" value="" name="username" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password " value="" name="password" required/>
                    </div>
                    <div class="form-group">
                        <!-- Button trigger modal -->
                        <input type="submit" class="btnSubmit" value="Login" name="login" />
                        
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div>


                    <div class="col-sm-12">
                        <div class="alert  alert-danger alert-dismissible fade show" role="alert" <?php if(empty($error)) echo "hidden"; ?>>
                            <span><?php echo $error?></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6 regi-form">
                <h3>Register</h3>
                <form>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" value="" name="email" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username " value="" name="username" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password " value="" name="password" required/>
                    </div>

                    <div class="form-group">
                        <p class="text_policy">
                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.
                        </p>
                    </div>

                    <div class="form-group">
                        <a href="buyer_regi.php" class="btn btnSubmit">Continue as Buyer</a>
                    </div>

                    <div class="form-group">
                        <a href="seller_regi.php" class="btn btnSubmit">Register as Seller</a>
                    </div>

                    

                    

                    
                
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END OF LOGIN REGI FORM -->

<?php
include_once 'footer.php';
?>



