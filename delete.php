<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "curd_cc";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("Could not connect. " . $e->getMessage());
}

try {
  // SQL to delete a record
  $sql = "DELETE FROM student WHERE user_name='lusuni'";
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo "Error deleting record: " .$sql . "<br>" . $e->getMessage();
}

$conn = null;
?>