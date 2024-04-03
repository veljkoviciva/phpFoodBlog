<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "foodblog";

    $conn = new mysqli($host, $username, $password, $database);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_errno);
    }
    // else
    //     echo "Connected successfully";
?>