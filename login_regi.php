<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login_regi.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>


<body>
    <div class="container login-container">
        <div class="row">
            <!-- Login Page -->
            <div class="col-md-6 login-form">
                <h3>Login</h3>
                <form method="POST" action="final-ecomm/login.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email or Username" value="" name="username" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password " value="" name="password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" name="login"/>
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div>
                </form>
            </div>
            <!-- End of Login Page -->

            <!-- Registration as Customer -->
            <div class="col-md-6 regi-form">
                <h3>Register</h3>
                
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email " value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password " value="" />
                    </div>

                    <div class="form-group">
                        <p class="text_policy">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Register" />
                    </div>
                    <div class="form-group">
                        <button type="button" class="btnSubmit" onclick="location.href='seller_regi.php';" />Become a Seller</button>
                    </div>
                </form>
            </div>
            <!-- End of registration -->
        </div>
    </div>
</body>
</html>