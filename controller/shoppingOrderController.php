<?php 
class shoppingOrderController {

   private $connection;

   function __construct() {
      $this->db_connect();
   }

   public function db_connect() {
      $this->connection = mysqli_connect('localhost', 'root', '', 'final_ecomm');
      if(mysqli_connect_error()) {
         die("Database connection failed " . mysqli_connect_error() . mysqli_connect_errno());
      }
   }

   public function create_order($sql) {
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
      return true;
      } else {
      return false;
      }
   }

   public function read_order($sql) {
      if(isset($sql)) {
         return $result = mysqli_query($this->connection, $sql);
      } else {
         return false;
      }
   }



}

$order = new shoppingOrderController();
$order->db_connect();
?>