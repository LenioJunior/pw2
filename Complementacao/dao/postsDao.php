<?php

    function getParentPosts(mysqli $connection) {
        $query = "SELECT * FROM Posts WHERE pai IS NULL ORDER BY data DESC";
        return mysqli_query($connection, $query);
    }

    function getChildPosts(mysqli $connection) {
        $query = "SELECT * FROM Posts WHERE pai IS NOT NULL  ORDER BY data DESC";
        return mysqli_query($connection, $query);
    }

    function insertPost(mysqli $connection, $content, $parent, $date) {
        $query = "INSERT INTO posts (conteudo, pai, data) 
                    VALUES ('{$content}', $parent, '{$date}');";
        return mysqli_query($connection, $query);
    }
?>