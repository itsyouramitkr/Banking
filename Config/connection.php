<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "BankingSystem";

$conn = new mysqli($serverName,$userName,$password,$databaseName);

if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }
// echo "connection database successfully";

?>