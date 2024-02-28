<!DOCTYPE html>
<!-- Doctype do html5 -->
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As três tags acima devem vir primeiro no head -->

    <!-- Atualiza a página a cada 5 segundos -->
    <meta http-equiv="refresh" content="5">

    <title>Primeira aula PHP</title>

    <!-- CSS do Bootstrap http://getbootstrap.com -->
    <link rel="stylesheet" href="../bootstrap-3.3.6/css/bootstrap.min.css">
    <!-- Thema do Bootstrap -->
    <link rel="stylesheet" href="../bootstrap-3.3.6/css/bootstrap-theme.min.css">
    <!-- Customizações -->
    <link rel="stylesheet" href="../bootstrap-3.3.6/css/theme.css">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
          <h1>Olá pessoal!!!</h1>
          <!-- Super tag PHP -->
          <?php
            date_default_timezone_set('America/Sao_Paulo');
            $current_date = date('d/m/Y - h:i:s');
            echo "<p> $current_date <p/>";

            echo "<p> Aqui </br> deve ter uma quebra </>";

            $seconds = date('s');
            if ($seconds % 2) {
          ?>
            <div class="alert alert-success" role="alert">
              Essa é uma página <strong>dinâmica</strong>!
            </div>
          <?php
            }
          ?>
      </div>
    </div>

    <!-- jQuery (necessário para os plugins JavaScritp do Bootstrap (https://jquery.com/) -->
    <script src="../bootstrap-3.3.6/js/jquery.min.js"></script>
    <!-- Plugins para JavaScript do Bootstrap -->
    <script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
