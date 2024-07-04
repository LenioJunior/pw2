<?php

    function getUsuarioByEmail($connection, $email){
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        return mysqli_query($connection, $query);
    }

    function criarUsuario($connection, $email, $senha){
        $query = "INSERT INTO usuarios(email, senha) VALUES ('$email','$senha')";
        return mysqli_query($connection, $query);
    }

    function validarUsuario($connection, $email, $senha){
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        return mysqli_query($connection, $query);
    }
?>