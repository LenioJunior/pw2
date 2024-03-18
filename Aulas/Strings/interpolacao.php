<?php
  include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
    <h3>Interpolação</h3>
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

<?php
  include('../../rodape.php');
?>
