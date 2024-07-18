<?php

    $action = $_GET['action'];

    if($action === 'inserir') {
        inserir();
    } 
    else if($action === 'editar') {
        editar();
    } 
    else if($action === 'excluir') {
        excluir();
    }

    function inserir() {
        
        if (array_key_exists('nome', $_POST) && array_key_exists('preco', $_POST)) {
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
    
            $con = mysqli_connect("localhost", "root", "1234", "sce");
    
            $res = mysqli_query($con, "INSERT INTO produto (nome, preco) VALUES ('$nome', $preco)");
            
            if ($res) {
                header("Location: tabelas.php?insert=true&produto={$nome}");
            } else {
                print("Ocorreu um erro: " . mysqli_error($con));
            }
        } 
    }

    function editar() {
        
        if (array_key_exists('nome', $_POST) &&
            array_key_exists('id', $_POST) &&
            array_key_exists('preco', $_POST)) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            $con = mysqli_connect("localhost", "root", "1234", "sce");

            $res = mysqli_query($con, "UPDATE produto SET nome = '$nome', preco = $preco WHERE id = $id");
            
            if ($res) {
                header("Location: tabelas.php?update=true&produto={$nome}");
            } else {
                print("Ocorreu um erro: " . mysqli_error($con));
            }
        }
    }

    function excluir() {

        if (array_key_exists('id', $_GET)) {
            $id = $_GET['id'];
            $nome = $_GET['nome'];

            $con = mysqli_connect("localhost", "root", "1234", "sce");

            $res = mysqli_query($con, "DELETE FROM produto WHERE id = $id");

            if ($res) {
                header("Location: tabelas.php?delete=true&produto={$nome}");
            } else {
                print("Ocorreu um erro: " . mysqli_error($con));
            }
        }
    }
?>