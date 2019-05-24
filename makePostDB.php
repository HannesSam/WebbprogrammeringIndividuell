<?php
require 'include/bootstrap.php';

if (!isset($_POST["header"])) {
    header("location: index.php");
}
session_start();
$header = $_POST["header"];
$text = $_POST["text"];
$userID = $_SESSION["userID"];
Post::addPost($userID, $header, $text);
