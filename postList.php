<?php
require 'include/bootstrap.php';
$result = Post::getPosts();
while ($row = $result->fetch_assoc()) {
    $userID = $row["userID"];
    $userName =  User::getUserName($userID);
    echo '<div class="postsDiv">
        <div class="postContainer">
        <h2 class="posts header">' . $row["header"] . '</h2> <br> <br> 
        <p class="posts userName">  <strong> Author: </strong> <i>' . $userName['userName'] . '</i> </p> <br>
        <p class="posts text"> <i class="fas fa-terminal"></i>  '
        . $row["text"] . '</p> </div> </div>';
}
