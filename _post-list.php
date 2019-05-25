<?php
require 'include/bootstrap.php';
$result = Post::getPosts();
while ($row = $result->fetch_assoc()) {
    $userID = $row["userID"];
    $userName =  User::getUserName($userID);
    echo '<div class="postsDiv">';
    echo '<h3 class="posts header">' . $row["header"] . "</h3>";
    echo '<h4 class="posts userName">' . $userName['userName'] . "</h4>";
    echo '<p class="posts text">' . '<i class="fas fa-terminal"></i>' . '<code>'
        . $row["text"] . '</code>' . "</p>";
    echo "</div>";
}
