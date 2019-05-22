<?php
require 'include/bootstrap.php';

$email = $_GET["email"];;
$password = $_GET["password"];

echo User::logIn($email, $password);
