<?php
class Post
{

    public static function addPost($userID, $header, $text)
    {
        //injection attacks?
        if (CheckInput::valdiateNotEmpty($header, $text)) {
            $header = Database::escapeString($header);
            $text = Database::escapeString($text);
            $sql = "INSERT INTO posts (userID, header, text) VALUES ('$userID', '$header', '$text')";
            if (Database::insertToDb($sql)) {
                echo "Post added!";
            } else {
                echo "Error when adding post to database";
            }
        } else {
            echo "Please input all values";
        }
    }

    public static function getPosts()
    {
        //injection attacks?
        //where xxx och standardvärdet returnerar alla så man kan söka
        $sql = "SELECT userID, header, text FROM posts";
        $result = Database::queryDb($sql);
        return $result;
    }
}
