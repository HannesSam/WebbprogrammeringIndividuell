<?php
require 'include/bootstrap.php';
session_start();
$header = $_GET["header"];
$text = $_GET["text"];
$userID = $_SESSION["userID"];
echo Post::addPost($userID, $header, $text);
