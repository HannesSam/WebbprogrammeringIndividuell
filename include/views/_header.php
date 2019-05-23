<?php //require 'include/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="/assets/css/app.css" />
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/app.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>The Code Blog</title>
</head>

<body>
    <div id="wrapper">
        <div class="headerTop">
            <h1>The Code Blog <i class="fas fa-code"></i>

            </h1>
        </div>

        <div class="topnav">
            <?php include 'checkIfLog.php' ?>
        </div>