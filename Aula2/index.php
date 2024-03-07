<!DOCTYPE html>
<!-- Doctype do html5 -->
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As três tags acima devem vir primeiro no head -->

    <title>Segunda aula PHP</title>

    <!-- CSS do Bootstrap http://getbootstrap.com -->
    <link rel="stylesheet" href="../bootstrap-5.3.3/css/bootstrap.min.css">
    <!-- Thema do Bootstrap -->
    <!-- <link rel="stylesheet" href="../bootstrap-5.3.3/css/bootstrap-theme.min.css"> -->
    <!-- Customizações -->
    <!-- <link rel="stylesheet" href="../bootstrap-5.3.3/css/theme.css"> -->
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
          <a href="variaveis.php" class="btn btn-lg btn-default">Variáveis</a>
          <a href="interpolacao.php" class="btn btn-lg btn-default">Interpolação</a>
          <a href="concatenacao.php" class="btn btn-lg btn-default">Concatenação</a>
          <a href="sinal-soma.php" class="btn btn-lg btn-default">Sinal da soma (+)</a>

          <div class="dropdown btn-group" role="group">
          <button class="btn btn-lg btn-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tipos de dados escalares
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="boolean.php">Boolean</a></li>
              <li><a class="dropdown-item" href="integer.php">Integer</a></li>
              <li><a class="dropdown-item" href="float.php">Float</a></li>
              <li><a class="dropdown-item" href="string.php">String</a></li>
            </ul>
          </div>
      </div>
    </div>

    <!-- jQuery (necessário para os plugins JavaScritp do Bootstrap (https://jquery.com/) -->
    <script src="../bootstrap-5.3.3/js/popper.min.js"></script>
    <!-- Plugins para JavaScript do Bootstrap -->
    <script src="../bootstrap-5.3.3/js/bootstrap.min.js"></script>
  </body>
</html>
