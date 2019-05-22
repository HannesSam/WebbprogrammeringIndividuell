<?php
require 'include/bootstrap.php';
session_start();
$header = $_GET["header"];
$text = $_GET["text"];
$userID = $_SESSION["userID"];
Post::addPost($userID, $header, $text);
