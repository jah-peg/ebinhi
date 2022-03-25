<?php
session_start();

include_once('database.php');

  if(isset($_POST['submit'])) 
  {
    $firstname =$_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $firstname . " " . $lastname;
    $encrypted_pass = password_hash($password, PASSWORD_BCRYPT);

    $create_seller_statement = $database->create_seller($fullname, $username, $email, $encrypted_pass);
    
    if($create_seller_statement) {
      echo '<script> alert("Success!") </script>';
    } else {
        echo '<script> alert("Failed!") </script>';
    }
   } else {
      echo '<script>alert("Error");</script>';
   }
?>

