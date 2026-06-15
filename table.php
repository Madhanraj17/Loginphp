<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "curd_cc";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Could not connect. " . $e->getMessage());
}

try {
  // sql to create table
  $sql = "CREATE TABLE student (
  user_name varchar(100),
  last_name varchar(100),
  Email varchar(100) ,
  gender varchar(100),
  age int
  )";
  $conn->exec($sql);
  echo "Table created successfully";
} catch(PDOException $e) {
  echo "Error creating table: " . $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>