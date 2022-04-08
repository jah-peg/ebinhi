<?php 
class productController {

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

   public function create_product($title, $summary, $description, $stock, $category, $photo, $price, $vendor_id) {
      $sql = "INSERT INTO products(title, summary, description, stock, category_id, photo, price, vendor_id) VALUES('$title', '$summary', '$description', '$stock', '$category', '$photo', '$price', '$vendor_id');";
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
      return true;
      } else {
      return false;
      }
   }

   public function read_product($sql) {
      if(mysqli_query($this->connection, $sql)) {
         return $result = mysqli_query($this->connection, $sql);
       } else {
         return false;
       }
   }

   


}

$product = new productController();
$product->db_connect();
?>