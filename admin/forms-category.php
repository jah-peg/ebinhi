<?php
include_once('../database.php'); 

if(isset($_POST['register'])) {
    $category = $_POST['category'];

    $create_category_statement = $database->create_category($category);

    if($create_category_statement) {
        echo '<script> alert("Success!") </script>';
        header("Location: index.php");
    } else {
        echo '<script> alert("Failed!") </script>';
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
                            <li><a href="#">Add Category</a></li>
                            <li class="active">Category Form</li>
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
                                <div class="card-header"><strong>Add Category</strong><small> Form</small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="category" class="form-control-label">Category Name</label><input type="text" id="category" placeholder="Enter category name" class="form-control" name="category"></div>
                                    <div class="form-group">
                                        <label for="parent_id" class=" form-control-label">Parent Category <small>(If applicable)</small></label>
                                        <select id="parent_id" name="parent_id" class="form-control">
                                            <option>Category #1</option>
                                            <option>Category #2</option>
                                            <option>Category #3</option>
                                        </select>
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
