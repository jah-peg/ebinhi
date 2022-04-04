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

  // registration of new customers
  public function create_customers($userName, $email, $encrypted_pass) {
    $sql = "INSERT INTO users(username, email, password) VALUES('$userName', '$email', '$encrypted_pass');";
    $retval = mysqli_query($this->connection, $sql);
    if($retval) {
      return true;
    } else {
      return false;
    }
  }

  // verifying of credentials
  public function verify($userName, $password) {
    $sql = "SELECT * FROM `users` WHERE `username` = '$userName' LIMIT 1;";
    $result = mysqli_query($this->connection, $sql);

    if(mysqli_num_rows($result)) {
      return $result;
    } else {
      return false;
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

  public function create_seller($fullname, $username, $email, $encrypted_pass, $photo, $phone, $address) {
    $sql = "INSERT INTO users(full_name, username, email, password, photo, phone, address, role) VALUES('$fullname', '$username', '$email', '$encrypted_pass', '$photo', '$phone', '$address', 'vendor');";
    $retval = mysqli_query($this->connection, $sql);
    if($retval) {
      return true;
    } else {
      return false;
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
