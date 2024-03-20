<?php

include('cabecalho.php');
include('controlador/conecta.php');
include('dao/produtoDao.php');
?>

<?php

//recupera os valores do formulário
$nome = "";
$preco = floatval("0");
$error_message = "";
$is_error = false;
var_dump($_POST);

if (array_key_exists('nome', $_POST) && trim(strlen($_POST['nome']) > 0)) {
    $nome = $_POST['nome'];
} else {
    $is_error = true;
    $error_message = "<p class='text-danger text-center'> Nome inválido </p> <br/>";
}

if (array_key_exists('preco', $_POST) && $_POST['preco'] > 0) {
    $preco = $_POST['preco'];
} else {
    $is_error = true;
    $error_message .= "<p class='text-danger text-center'> Preço inválido </p> <br>";
}

if ($is_error == true) {
    echo $error_message;
} else {

    //recupero uma conexão do banco.
    $connection = getConnection();

    //verificar se conseguiu incluir o produto no banco.
    if (insereProduto($connection, $nome, $preco)){
        //echo("<h3><p class='text-sucess text-center'>Produto: {$nome} adicionado com sucesso </p></h3>");
        header("Location: produto-formulario-adicionar.php?inserir=true&produto={$nome}");
        die();
    }else {
        $error_sql = mysqli_error($connection);
        echo("<h4><p class='text-danger text-center'>Produto: {$nome} não adicionado com sucesso </p></h4>");
        echo("<h4><p class='text-danger text-center'>Error  : {$error_sql} </p></h4>");
    }
}
?>

<?php

include('rodape.php');
?>