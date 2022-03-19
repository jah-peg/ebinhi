<?php

include('final-ecomm/database.php');

class Controllers {


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

  public function verify_customer($password, $db_pass) {
     $verify = new Database();
     if(password_verify($password,$db_pass));
  }

}

?>