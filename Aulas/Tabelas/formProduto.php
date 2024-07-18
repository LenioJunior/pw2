<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.3/css/bootstrap.css">
    <title>Cadastrar Produto</title>
</head>
<body>
    <?php
        $action = "inserir";
        $nome = "";
        $preco = "";
        $id = "";

        if(array_key_exists("editar", $_GET)) {
            $id = $_GET['id'];
            $action = "editar";
            
            $con = mysqli_connect("localhost", "root", "1234", "sce");

            $res = mysqli_query($con, "SELECT * FROM produto WHERE id = $id");
            $content = mysqli_fetch_assoc($res);

            $nome = $content['nome'];
            $preco = $content['preco'];
        } 
        else if(array_key_exists("excluir", $_POST)) {
            $id = $_POST['id'];
            $action = "excluir";
        }

        echo '
        <form action="crud.php?action='.$action.'" method="post">
            <div class="mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="'.$id.'">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Produto" value="'.$nome.'">
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço do Produto"  value="'.$preco.'">
            </div>
            <div class="mb-3">
                <a href="tabelas.php" class="btn">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </a>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>';

    ?>

</body>
    <link rel="script" href="../../bootstrap-5.3.3/js/bootstrap.js"> 
</html>