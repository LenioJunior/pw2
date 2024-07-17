<?php
    
    var_dump($_POST);

    if(array_key_exists('nome', $_POST) &&
        array_key_exists('id', $_POST) &&
        array_key_exists('preco', $_POST)){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        print($id . " -- " . $nome . " -- " . $preco);

        $con = mysqli_connect("localhost", "root", "1234", "sce");

        $res = mysqli_query($con, "UPDATE produto SET nome = '$nome', preco = $preco WHERE id = $id");
        
        if ($res) {
            header("Location: tabelas.php?update=true&produto={$nome}");
        } else {
            print("Ocorreu um erro: " . mysqli_error($con));
        }
    } 
?>