<?php
 session_start();

 require 'connect.php';
 require 'functions.php';

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
 $id = $_SESSION['userid'];
$sql = "DELETE FROM students WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

//mysqli_close($conn);
header("refresh:3; url=register.php");

?>