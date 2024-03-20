<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistema de Controle de Estoque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sce.css">
        <script src="https://kit.fontawesome.com/f2941d600b.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!--        Esse código cria a barra de menu do nosso sistema-->
        <div class="nav navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="nav-header">
                    <a class="navbar-brand" href="index.php">Gestão de Estoque</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estoque<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="produto-formulario-adicionar.php">Adicionar Produto</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="produto-formulario-listar.php">Listar Produto</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisar<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="pesquisa-formulario-descricao.php">Descrição de produtos</a></li>
                                <li><a href="pesquisa-formulario-estoque.php">Estoque de produtos</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">

                        <button type="submit" class="btn btn-info" aria-label="left">
                            <span class="glyphicon glyphicon-off pull-left"> Sair</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!--       Não esqueça de fechar o body no rodapé -->