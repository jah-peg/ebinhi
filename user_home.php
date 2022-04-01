<?php 
   
   session_start();
   if(!isset($_SESSION['user'])) {
      header("location: ../log_reg.php");
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

   <?php echo $result['username']; ?> <br>
   <?php echo $result['email']; ?> <br>
   <img src="uploads/<?php echo $result['photo']; ?>" alt=""> <br>
   <?php echo $result['phone']; ?> <br>
   <?php echo $result['address']; ?> <br>
   <?php echo $result['role']; ?> <br>
   <?php echo $result['status']; ?> <br>
   <button><a href="logout.php">Logout</a></button>
</body>
</html>