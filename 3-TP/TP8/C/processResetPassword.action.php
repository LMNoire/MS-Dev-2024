<?php
include "../M/DbManagement.class.php";
include "../M/User.class.php";

$password = $_POST["password"];
$mail = $_POST["email"];

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

DbManagement::resetPassword($password, $mail);

echo "Password updated. You can now login.";
header("Refresh:5; url=../V/index.php");