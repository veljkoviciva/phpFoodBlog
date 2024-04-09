<?php

include('dbConnection.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['emailAddress'];
$username = $_POST['username'];
$password = $_POST['userPassword'];

if (!empty($name) && !empty($surname) && !empty($email) && !empty($username) && !empty($password)) {
    // echo "Nije empty, moze";
    
    

    $password = sha1($password . "php2024"); //pass sa dodatkom

    $stmt = $conn->prepare("insert into users (name, surname, email, username, password, role)
            values (?,?,?,?,?,'korisnik')");
    $stmt->bind_param("sssss", $name, $surname, $email, $username, $password);

    if ($stmt->execute()) {
        header("Location:../login.php");
    } else
        die("Greska: " . $conn->error);
}
