<?php
class vendorController {
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

   public function create_seller($fullname, $username, $email, $encrypted_pass, $photo, $phone, $address) {
      $sql = "INSERT INTO users(full_name, username, email, password, photo, phone, address, role) VALUES('$fullname', '$username', '$email', '$encrypted_pass', '$photo', '$phone', '$address', 'vendor');";
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
         return true;
      } else {
         return false;
      }
   }

   public function read_vendor($sql) {
      if(!empty($sql)) {
         return $result = mysqli_query($this->connection, $sql);
      } else {
         return false;
      }
   }

   public function update_seller() {

   }

   public function verify_vendor($userName, $password) {
      $sql = "SELECT * FROM `users` WHERE `username` = '$userName' LIMIT 1;";
      $result = mysqli_query($this->connection, $sql);

      if(mysqli_num_rows($result)) {
      return $result;
      } else {
      return false;
      }
   }


}




$vendor = new vendorController();
$vendor->connect_db();

?>