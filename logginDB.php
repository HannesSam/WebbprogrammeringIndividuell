<?php
require 'include/bootstrap.php';

$email = $_GET["email"];;
$password = $_GET["password"];

User::logIn($email, $password);
