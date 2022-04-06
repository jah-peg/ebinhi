<?php

// Creating a Database class for the connection

class Database {
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

  

  

  public function read_customers($sql) {
    $result = mysqli_query($this->connection, $sql);

    if($result) {
      $row = mysqli_fetch_assoc($result);
      return $row;
    } else {
      return false;
    }
  }

  public function read_all($sql) {
    if(!empty($sql)) {
      return $result = mysqli_query($this->connection, $sql);
    } else {
      return false;
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

  public function create_product($title, $summary, $description, $stock, $category, $photo, $price, $vendor_id) {
    $sql = "INSERT INTO products(title, summary, description, stock, category_id, photo, price, vendor_id) VALUES('$title', '$summary', '$description', '$stock', '$category', '$photo', '$price', '$vendor_id');";
    $retval = mysqli_query($this->connection, $sql);
    if($retval) {
      return true;
    } else {
      return false;
    }
  }
}


$database = new Database();
$database->connect_db();
?>
