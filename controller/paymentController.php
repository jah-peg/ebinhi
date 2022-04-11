<?php

class paymentController {
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
   public function create_payment($userName, $email, $encrypted_pass) {
      $sql = "INSERT INTO users(username, email, password) VALUES('$userName', '$email', '$encrypted_pass');";
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
      return true;
      } else {
      return false;
      }
   }

   public function read_payment($sql) {
      if(!empty($sql)) {
         return $result = mysqli_query($this->connection, $sql);
         // return $row = mysqli_fetch_assoc($result);
      } else {
         return false;
      }
   }

   public function update_payment() {

   }


}



$payment = new paymentController();
$payment->connect_db();

?>