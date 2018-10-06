<?php
//require db details
require 'db_login.php';

//connect database
$conn = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {

  $query = $conn->query("DELETE FROM partnerek WHERE id='$id'");

}

?>
