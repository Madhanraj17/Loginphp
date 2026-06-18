<?php
$servername = "localhost";
$username = "root";
$dbname = "curd_cc";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("Could not connect. " . $e->getMessage());
}

try {
  // SQL to update a record
  $sql = "UPDATE student SET last_name='Raja' WHERE user_name='madhan'";
  // execute the query
  $conn->exec($sql);
  echo "Record updated successfully";
} catch(PDOException $e) {
  echo "Error updating record: " .$sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
