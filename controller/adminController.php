<?php

// Creating a Database class for the connection

class adminController {
   private $connection;

   function __construct(){
      $this->connect_db();
   }

   //this is where we connect to our localhost and database
   public function connect_db() {
      $this->connection = mysqli_connect('localhost', 'root', '', 'final_ecomm');
      if(mysqli_connect_error()) {
      die("Database connection failed " . mysqli_connect_error() . mysqli_connect_errno());
      }
   }

   public function create_admin($fullname, $username, $email, $encrypted_pass) {
      $sql = "INSERT INTO users(full_name, username, email, password, role) VALUES('$fullname', '$username', '$email', '$encrypted_pass', 'admin');";
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
         return true;
      } else {
         return false;
      }
   }

   public function read_admin ($sql) {
      $result = mysqli_query($this->connection, $sql);

      if($result) {
         $row = mysqli_fetch_assoc($result);
         return $row;
      } else {
         return false;
      }
   }

   public function update_admin() {

   }

   // verifying of credentials
   public function verify_admin($userName, $password) {
      $sql = "SELECT * FROM `users` WHERE `username` = '$userName' LIMIT 1;";
      $result = mysqli_query($this->connection, $sql);

      if(mysqli_num_rows($result)) {
      return $result;
      } else {
      return false;
      }
   }


}


$admin = new adminController();
$admin->connect_db();
?>