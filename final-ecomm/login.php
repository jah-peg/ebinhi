<?php 

   include 'connection.php';

   session_start();


   if(isset($_POST['login'])) {
      $uname = $_POST['username'];
      $pass = $_POST['password'];
      $hashed_pass = md5($pass);
      if(!empty($_POST['username']) && !empty($_POST['username'])) {  
         

         $query = mysqli_query($conn ,"SELECT * FROM users WHERE username = '".$uname."'");
         $numrows = mysqli_num_rows($query);

         if($numrows != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
               $tableUsername = $row['username'];
               $tablePassword = $row['password'];
            }

            if($uname == $tableUsername && $hashed_pass == $tablePassword) {
               echo "Success!";
            } else {
               echo "Incorrect credentials!";
            }
         }
      }
   }

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username">
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password">

      <button name="login">Login</button>
   </form>
</body>
</html> -->