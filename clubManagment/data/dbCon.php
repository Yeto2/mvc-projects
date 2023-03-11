<?php

$serverName = "localhost";
$username = "root";
$pass = "";
$dbName = "clubManagment";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName",$username , $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfuly";
} catch (PDOException $e) {
    echo "Connection Faild !" . $e->getMessage();
}


?>