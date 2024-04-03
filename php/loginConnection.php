<?php

session_start();

include('dbConnection.php');

$username = $_POST['username'] ?? "Anonimus";
$password = $_POST['userPassword'] ?? "";

// echo $username . " " . $password;

$stmt = $conn->prepare("select * from users where username = ? and password=?");
$stmt->bind_param("ss", $username, $password);

if (!$stmt->execute()) {
    die("Greska: " . $conn->error);
}

$res = $stmt->get_result();

if (!$userData = $res->fetch_assoc()) {
    $message = "Korisnik ne postoji!";
    $_SESSION['message'] = $message;
    header("Location: ../login.php?message=" . urlencode($message));
    die();
    // die ("Korisnik ne postoji!");
}

$_SESSION['userID'] = $userData['userID'];
$_SESSION['name'] = $userData['name'];
// $_SESSION['surname'] = $userData['surname'];
$_SESSION['email'] = $userData['email'];
$_SESSION['username'] = $userData['username'];
$_SESSION['pass'] = $userData['password'];
$_SESSION['role'] = $userData['role'];

if ($userData['role'] == "korisnik") {
    header("Location: ../home.php");
}

if ($userData['role'] == "administrator") {
    header("Location: ../adminHome.php");
}

$conn->close(); //mozda bi moglo da pravi problem
