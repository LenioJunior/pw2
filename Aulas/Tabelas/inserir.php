<?php
    
    if(array_key_exists('nome', $_POST) &&
    array_key_exists('preco', $_POST)){
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
?>