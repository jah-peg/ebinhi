<?php 
session_start();

include_once('database.php');

// this is for login script
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypted_pass = password_hash($password, PASSWORD_BCRYPT);
    
    $verify_statement = $database->verify_customers($username, $password);
    

    if(!$verify_statement) {
        echo "Failed!";
    } else {
        echo '<script> alert("Success!") </script';
        $_SESSION['user'] = $verify_statement;
		header("Location: user_home.php");
    }   
}
?>



<?php
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $encrypted_pass = password_hash($password, PASSWORD_BCRYPT);

    $create_customer_statement = $database->create_customers($username, $email, $encrypted_pass);

    if($create_customer_statement) {
        echo '<script> alert("Success!") </script>';
        header("Location: log_reg.php");
    } else {
        echo '<script> alert("Failed!") </script>';
        header("Location: log_reg.php");
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
                            <input type="text" class="form-control" placeholder="Email or Username" value="" name="username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password " value="" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" name="login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 regi-form">
                    <h3>Register</h3>
                    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email " value="" name="email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" value="" name="username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password " value="" name="password" />
                        </div>

                        <div class="form-group">
                            <p class="text_policy">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" name="register"/>
                        </div>

                        <div class="form-group">
                        <button type="button" class="btnSubmit" onclick="location.href='seller_regi.php';" />Become a Seller</button>
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