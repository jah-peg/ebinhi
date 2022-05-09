<?php

class customerController {
   private $connection;

   function __construct() {
      $this->connect_db();
   }

   public function connect_db() {
      $this->connection = mysqli_connect('localhost', 'root', '', 'final_ecomm');
      if(mysqli_connect_error()) {
         die("Database connection failed " . mysqli_connect_error() . mysqli_connect_errno());
      }
   }

   // registration of new customers
   public function create_customer($fullname, $username, $email, $encrypted_pass, $photo, $phone, $address) {
      $sql = "INSERT INTO users(full_name, username, email, password, photo, phone, address) VALUES('$fullname', '$username', '$email', '$encrypted_pass', '$photo', '$phone', '$address');";
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
         return true;
      } else {
         return false;
      }
   }

   public function read_customers($sql) {
      if(!empty($sql)) {
         return $result = mysqli_query($this->connection, $sql);
         // return $row = mysqli_fetch_assoc($result);
      } else {
         return false;
      }
   }

   public function profile_customers($sql) {
      if(!empty($sql)) {
         $result = mysqli_query($this->connection, $sql);
         return $row = mysqli_fetch_assoc($result);
      } else {
         return false;
      }
   }

   public function update_customers() {

   }

   // verifying of credentials
   public function verify_customer($userName, $password) {
      $sql = "SELECT * FROM `users` WHERE `username` = '$userName' LIMIT 1;";
      $result = mysqli_query($this->connection, $sql);

      if(mysqli_num_rows($result)) {
      return $result;
      } else {
      return false;
      }
   }

}









$customer = new customerController();
$customer->connect_db();

?>