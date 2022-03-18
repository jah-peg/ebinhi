<?php
// procedural programming (ekis na to)
// $server = 'localhost';
// $database = 'final_ecomm';
// $username = 'root';
// $password = '';

// $conn = mysqli_connect($server, $username, $password, $database);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// $message = "Connected successfully";

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
    $sql = "SELECT * FROM users WHERE username = $userName";
    $retval = mysqli_query($this->connection, $sql);
    
    if($retval) {
      while($row = mysqli_fetch_assoc($retval)) {
        $db_pass = $row['password'];
  
        if(password_verify($password, $db_pass)) {
          return true;
        } else {
          return false;
        }
      }
    } else {
      return false;
    }

    

    
    
  }
}


$database = new Database();
$database->connect_db();
?>