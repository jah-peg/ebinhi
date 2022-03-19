<?php 
   
   session_start();
   if(!isset($_SESSION['user'])) {
      header("location: ../login_regi.php");
   }

   include_once('database.php');

   $user = new Database();

   // fetch user information in the database
   $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
   $result = $user->read_customers($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Home</title>
</head>
<body>
   <h1>This where your transactions as a user will take place</h1>

   <?php echo $result['username']; ?>
   <?php echo $result['email']; ?>
   <?php echo $result['role']; ?>
   <?php echo $result['status']; ?>

</body>
</html>