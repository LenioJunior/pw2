<?php

    function getPosts(mysqli $connection) {
        $query = "SELECT * FROM Posts ORDER BY data DESC";
        return mysqli_query($connection, $query);
    }

    function insertPost(mysqli $connection, $content, $parent, $date) {
        $query = "INSERT INTO posts (conteudo, pai, data) 
                    VALUES ('{$content}', $parent, '{$date}');";
        return mysqli_query($connection, $query);
    }
?>