<?php
require 'include/bootstrap.php';

if (!isset($_POST["email"])) {
    header("location: index.php");
}
$email = $_POST["email"];;
$password = $_POST["password"];

echo User::logIn($email, $password);
