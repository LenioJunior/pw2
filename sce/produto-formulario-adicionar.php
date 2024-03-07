<?php
include('cabecalho.php');
?>

<!--lembre-se que o include cabecalho.php já implemntou o <html> e o rodape. php já fechou a tag.-->
<!--vamos criar o nosso formulário -->

<div class="container">
    <div class="starter-template">
        <figure>
            <img src="img/estoque.jpg" class="img-responsive center-block" alt="Responsive image">
        </figure>
    </div>

    <?php
    if ((array_key_exists("inserir", $_GET)) && ($_GET['inserir']) == "true") {
        echo("<h4><p class='alert alert-success text-center'>Produto: {$_GET['produto']} adicionado com sucesso ! </p></h4>");
    }
    ?>

    <div class="form-group thumbnail">
        <form method="post" action="produto-adiciona.php">

            <legend>Cadastrar Produto</legend>
            <div class="form-group">
                <label for="produto-nome">Nome</label>
                <input type="text" class="form-control" id="produto-nome"  name="nome">
            </div>
            <div class="form-group">
                <label for="produto-preco">Preço</label>
                <input type="text" class="form-control" id="produto-preco"  name="preco">
            </div>
            <div class="text-right">
                <input class="btn btn-primary btn-lg" type="submit" value="Inserir">
                <a href="../../index.php" class="btn btn-default btn-lg">Voltar</a>
            </div>

        </form>
    </div>
</div>

<?php
include('rodape.php');
?>
