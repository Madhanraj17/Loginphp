<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {

    $conn = new PDO(
        "mysql:host=$servername",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE curd_cc";

    $conn->exec($sql);

    echo "Database created successfully";

}
catch(PDOException $e){

    echo "Error: " . $e->getMessage();

}

$conn = null;

?>