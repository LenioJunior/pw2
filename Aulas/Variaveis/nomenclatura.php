<?php
    include('../../cabecalho.php');
?>

    <div class="container">
      <div class="jumbotron">
        <h3>Nomes válidos para variáveis</h3>
          <!-- Super tag PHP -->
          <?php
            $name = "Lênio";
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

<?php
  include('../rodape.php');
?>
