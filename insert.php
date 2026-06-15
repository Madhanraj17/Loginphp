<?php

include "connect.php";

$user_name = $_POST['user_name'];
$last_name = $_POST['last_name'];
$Email = $_POST['Email'];
$gender = $_POST['gender'];
$age = $_POST['age'];

$sql = "INSERT INTO student
(user_name,last_name,Email,gender,age)

VALUES
(:user_name,:last_name,:Email,:gender,:age)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':user_name', $user_name);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':Email', $Email);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':age', $age);

$stmt->execute();

echo "Data Inserted Successfully";

?>