<?php
include_once('../controller/adminController.php'); 

if(isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password) {
        $encrypted_pass = password_hash($password, PASSWORD_BCRYPT);

        $create_admin_statement = $admin->create_admin($fullname, $username, $email, $encrypted_pass);

        if($create_admin_statement) {
            echo '<script> alert("Success!") </script>';
            header("Location: index.php");
        } else {
            echo '<script> alert("Failed!") </script>';
        }
    }
    
}
?>


<?php include_once 'layout/sidebar.php' ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once 'layout/header.php' ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Add Admin Account</a></li>
                            <li class="active">Admin Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="card-header"><strong>Add Admin</strong><small> Form</small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="fullname" class=" form-control-label">Full Name</label><input type="text" id="fullname" placeholder="Enter your full name" class="form-control" name="fullname"></div>
                                    <div class="form-group"><label for="username" class=" form-control-label">Username</label><input type="text" id="vat" placeholder="Enter your username" class="form-control" name="username"></div>
                                    <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="text" id="street" placeholder="Enter your email" class="form-control" name="email"></div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <div class="form-group"><label for="city" class=" form-control-label">Password</label><input type="password" id="city" placeholder="Enter your password" class="form-control" name="password"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="postal-code" class=" form-control-label">Retype Password</label><input type="password" id="postal-code" placeholder="Retype Password" class="form-control" name="confirm_password"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" name="register">
                                        <i class="fa fa-dot-circle-o"></i> Register
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
