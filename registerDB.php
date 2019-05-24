<?php
require 'include/bootstrap.php';

if (!isset($_POST["email"])) {
    header("location: index.php");
}

$email = $_POST["email"];;
$password = $_POST["password"];
$userName = $_POST["userName"];
User::addUser($userName, $email, $password);
