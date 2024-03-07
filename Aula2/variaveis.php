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
          <h3>Nomes válidos para variáveis</h3>
          <!-- Super tag PHP -->
          <?php
            $name = "Emerson";
            $credit_card_number = "1234567891011121";
            $address_1 = "Rua Passos, 123";
            $_city = "Passos";

            echo "<p>\$name</p></br>";
            echo "<p>\$credit_card_number</p></br>";
            echo "<p>\$address_1</p></br>";
            echo "<p>\$_city</p></br>";
          ?>

          <h3>Nomes INválidos para variáveis</h3>
          <?php
            echo "<p>'name' não começa com $ </p> <br>";
            echo "<p>'\$email@' contém caracter especial </p> <br>";
            echo "<p>'\$1class' nome da variável inicia com número </p> <br>";
            echo "<p>'\$last-name' usa traço (-) ao invés de underscore (_) $ </p> <br>";
          ?>
      </div>
    </div>

    <!-- jQuery (necessário para os plugins JavaScritp do Bootstrap (https://jquery.com/) -->
    <script src="../bootstrap-5.3.3/js/jquery.min.js"></script>
    <!-- Plugins para JavaScript do Bootstrap -->
    <script src="../bootstrap-5.3.3/js/bootstrap.min.js"></script>
  </body>
</html>
