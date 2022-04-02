<?php
session_start();
include_once('../database.php'); 

$sql = "SELECT * FROM `categories`;";
$result = $database->read_all($sql);

if(isset($_POST['register'])) {
    
    
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
                                <div class="card-header"><strong>Add New Product</strong><small> Form</small></div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="title" class=" form-control-label">Title</label>
                                        <input type="text" id="title" placeholder="Enter your product name" class="form-control" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label for="summary" class=" form-control-label">Summary</label>
                                        <textarea rows="3" id="summary" placeholder="Enter your product summary" class="form-control" name="summary"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class=" form-control-label">Description</label>
                                        <textarea rows="5" id="description" placeholder="Enter your description of the product" class="form-control" name="description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="stock" class=" form-control-label">Stock</label>
                                        <input type="text" id="stock" placeholder="Enter your number of stocks" class="form-control" name="stock">
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="category" class=" form-control-label">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="" disabled selected hidden>Choose a Category</option>

                                            
                                                <option value="">
                                                    
                                                </option>
                                            

                                        </select>
                                        
                                        
                                    </div>
                                    
                                    <?php while($row = mysqli_fetch_assoc($result)) {?>
                                        <?php echo($row['category']); ?>
                                    <?php }?>
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
