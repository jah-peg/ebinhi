<?php

class deliveryController {
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
   public function create_delivery($customer_id) {
      $sql = "INSERT INTO deliveries(customer_id) VALUES('$customer_id');";
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
      return true;
      } else {
      return false;
      }
   }

   public function read_delivery($sql) {
      if(!empty($sql)) {
         return $result = mysqli_query($this->connection, $sql);
         // return $row = mysqli_fetch_assoc($result);
      } else {
         return false;
      }
   }

   public function update_delivery() {

   }


}



$delivery = new deliveryController();
$delivery->connect_db();

?>