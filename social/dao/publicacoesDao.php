<?php 
    function getPosts($connection){
        $query = "SELECT publicacoes.*, usuarios.nome 
                  FROM publicacoes
                  INNER JOIN usuarios ON publicacoes.usuario = usuarios.id
                  WHERE pai IS NULL";
        return mysqli_query($connection,$query);
    }
?>