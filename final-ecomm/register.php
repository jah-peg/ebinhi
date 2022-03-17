<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>Ecommerce Registration</h1>
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" name="fullName" placeholder="Full Name"> <br>
      <input type="text" name="userName" placeholder="Username"> <br>
      <input type="text" name="email" placeholder="Email"> <br>
      <input type="password" name="password" placeholder="Password"> <br>  
      <button name="register">Register</button>
   </form>
</body>
</html>


<?php

include 'connection.php';

if(isset($_POST['register'])) {
   $fullName = $_POST['fullName'];
   $userName = $_POST['userName'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $hashed_pass = md5($password);

   $insert_query = "INSERT INTO users(full_name, username, email, password) VALUES('$fullName','$userName', '$email', '$hashed_pass')";

   $retval = mysqli_query($conn, $insert_query);

   if(!$retval) {
      die("Cannot insert data: " . mysqli_error($conn));
   }

   header("Location: login.php");
   exit();
}

?>