<?php 
class googleController {

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

   public function create_code($sql) {
      $retval = mysqli_query($this->connection, $sql);
      if($retval) {
      return true;
      } else {
      return false;
      }
   }

   public function read_code($sql) {
      if(isset($sql)) {
         $result = mysqli_query($this->connection, $sql);
         return $row = mysqli_fetch_assoc($result);
      } else {
         return false;
      }
   }

   public function list_product($sql) {
      $result = mysqli_query($this->connection, $sql);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
   }

   
   // verifying of credentials
   public function verify_code($user_id) {
      $sql = "SELECT * FROM `google_fa` WHERE `user_id` = '$user_id' LIMIT 1;";
      $result = mysqli_query($this->connection, $sql);

      if(mysqli_num_rows($result)) {
      return $result;
      } else {
      return false;
      }
   }
   
   


}

$googleC = new googleController();
$googleC->db_connect();
?>