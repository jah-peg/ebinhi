<?php
class categoryController {

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

   public function create_category($category) {
      $sql = "INSERT INTO categories(category) VALUES('$category');";
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
         return true;
      } else {
         return false;
      }
   }

   public function read_category($sql) {
      if(mysqli_query($this->connection, $sql)) {
         return $result = mysqli_query($this->connection, $sql);
       } else {
         return false;
       }
   }

   public function update_category() {

   }

   public function delete_category() {

   }
}



$categ = new categoryController();
$categ->db_connect();
?>