<?php

session_start();
$userID = $_SESSION['userID'];

include("dbConnection.php");

$newPass = $_POST['resetPassword1'];
$newPassRepeat = $_POST['resetPassword2'];

$newPassSHA = sha1($newPass . "php2024");
$newPassRepeatSHA = sha1($newPassRepeat . "php2024");


if ($newPassSHA == $newPassRepeatSHA) {
    // echo "OK: " . $newPass . " je " . $newPassSHA . ", a <br>" . $newPassRepeat . " je " . $newPassRepeatSHA;
    $stmt = $conn->prepare("update users set password=? where userID=?");
    $stmt->bind_param("si", $newPassRepeatSHA, $userID);

    if ($stmt->execute()) {
        $message = "Uspešno ažurirana lozinka";
        $_SESSION['message'] = $message;
        header("Location: ../profil.php?message=" . urlencode($message));
    } else {
        die("Greska: " . $conn->errno);
    }
} else {
    // echo "NIJE OK: " . $newPass . " je " . $newPassSHA . ", a <br>" . $newPassRepeat . " je " . $newPassRepeatSHA;
    $message = "Unete lozinke nisu iste";
    $_SESSION['message'] = $message;
    header("Location: ../profil.php?message=" . urlencode($message));
}
