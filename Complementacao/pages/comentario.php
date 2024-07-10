<?php

    function getNewComment(int $comment) {
        return 
        '<div class="col-8">
            <div class="post-header col align-self-start"> 
                <div class="profile-pic">
                    <!-- <img src="../img/lenio.jpg" class="profile-pic" alt="..."> -->
                </div> 
                <div class="card-body">
                    <h5 class="card-title">User 1</h5>
                    <p class="card-text"> '. $comment . ' </p>
                </div>                
            </div>
        </div>';
    }

    function insertPost(mysqli $connection, $content, $parent, $date) {
        $query = "INSERT INTO posts (conteudo, pai, data) 
                    VALUES ('{$content}', $parent, '{$date}');";
        return mysqli_query($connection, $query);
    }
?>