<?php

    include('../db/conecta.php');

    $conexao = getConnection();

    if(array_key_exists('idPai', $_GET)){
        $idPai = $_GET['idPai'];
        //$comentarios = getComentarios($idPai);
        return ['1, 2, 3'];
    }
    return ['11, 22, 33'];
?>