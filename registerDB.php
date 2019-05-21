<?php
require 'include/bootstrap.php';

$email = $_GET["email"];;
$password = $_GET["password"];
$userName = $_GET["userName"];
User::addUser($userName, $email, $password);
