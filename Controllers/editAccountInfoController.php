<?php
// Start the session
session_start();

include_once("./common.php");
include_once("../Models/user.php");
Database::DBConnect();

if (!isset($_SESSION['id'])) {
    header("Location: ../index.php?status=session_expired");
} else {
    $id = $_SESSION['id'];
}

$Full_Name = safeGet("Full_Name");
$Email = safeGet("Email");
$Mobile_No = safeGet("Mobile_No");
$Profession = safeGet("Profession");
$Department = safeGet("Department");
$School_Collage = safeGet("School_Collage");
$Country = safeGet("Country");

User::edituser($Full_Name, $Email, $Mobile_No, $Profession, $Department, $School_Collage, $Country, $id);
header("Location: ../View/teacher/home.php");
?>