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
    <link rel="stylesheet" href="../bootstrap-5.3.3/css/bootstrap-theme.min.css">
    <!-- Customizações -->
    <link rel="stylesheet" href="../bootstrap-5.3.3/css/theme.css">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
          <h1>Interpolação</h1>
          <!-- Super tag PHP -->
          <?php
            $name = "Lênio";
            $credit_card_number = "1234567891011121";
            $address_1 = "Avenida Dirce Pereira Rosa, 123";
            $_city = "Poços de Caldas";

            echo "Nome: $name <br>";
            echo "Cartão: $credit_card_number <br>";
            echo "Endereço: $address_1 <br>";
            echo "Cidade: $_city $ <br>";
          ?>
      </div>
    </div>

    <!-- jQuery (necessário para os plugins JavaScritp do Bootstrap (https://jquery.com/) -->
    <script src="../bootstrap-5.3.3/js/jquery.min.js"></script>
    <!-- Plugins para JavaScript do Bootstrap -->
    <script src="../bootstrap-5.3.3/js/bootstrap.min.js"></script>
  </body>
</html>
