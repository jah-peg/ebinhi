<?php
session_start();

include_once('database.php');

  if(isset($_POST['submit'])) {
    $firstname =$_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $firstname . " " . $lastname;
    $encrypted_pass = password_hash($password, PASSWORD_BCRYPT);

    $create_seller_statement = $database->create_seller($fullname, $username, $email, $encrypted_pass);
    
    if($create_seller_statement) {
        header("Location: index.php");
    } else {
        echo '<script> alert("Failed!") </script>';
    }
}
?>

<?php 

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypted_pass = password_hash($password, PASSWORD_BCRYPT);
    
    $verify_statement = $database->verify_seller($username, $password);
    

    if($verify_statement) {
        echo '<script> alert("Success!"); </script>';
        $_SESSION['user'] = $verify_statement;
		header("Location: user_home.php");
    } else {
         echo '<script> alert("Failed!"); </script>';
    }   
}
?>



<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
   <input type="text" placeholder="First Name" name="firstname"> <br>
   <input type="text" placeholder="Last Name" name="lasttname"> <br>
   <input type="text" placeholder="Username" name="username"> <br>
   <input type="text" placeholder="Email" name="email"> <br>
   <input type="password" placeholder="password" name="password"> <br>
   <button name="submit">Submit</button>
</form>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
   <input type="text" placeholder="Username" name="username"> <br>
   <input type="password" placeholder="password" name="password"> <br>
   <button name="login">login</button>
</form>