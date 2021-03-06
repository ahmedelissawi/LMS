<?php
// Start the session
session_start();

include_once("./common.php");
include_once("../Models/user.php");
Database::DBConnect();
$user_name = safeGet("user_name", "");
$password = safeGet("password", "");

$ID = User::login($user_name, $password);

if ($ID == null) {
    header('Location: ../index.php?status=wrong');
} else {
    $user = User::user($ID);
    $_SESSION["id"] = $ID;
    if ($user->profession == "School Student" || $user->profession == "Collage Student") {
        header('Location: ../View/student/home.php');
    } else {
        header('Location: ../View/teacher/home.php');
    }
}


?>

