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
    $sql = "INSERT INTO users(username, email, password) VALUES('$userName', '$email', '$encrypted_pass')  ";
    $retval = mysqli_query($this->connection, $sql);
    if($retval) {
      return true;
    } else {
      return false;
    }
  }

  // verifying of credentials for the customers
  public function verify_customers($userName, $password) {
    $sql = "SELECT * FROM `users` WHERE `username` = '$userName'";
    $result = mysqli_query($this->connection, $sql);

    if(mysqli_num_rows($result)) {
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row['password'])) {
        return $row['id'];
      }
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



}


$database = new Database();
$database->connect_db();
?>