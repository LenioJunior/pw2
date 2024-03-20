<?php
include('cabecalho.php');
include('controlador/conecta.php');
include('dao/produtoDao.php');
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

    <div>
        <!-- <form method="post" action="produto-adiciona.php"> -->

            <legend>Listar Produtos</legend>
            <?php
                include('tabela.php');
            ?> 
        <!-- </form> -->
    </div>
</div>

<?php
include('rodape.php');
?>
