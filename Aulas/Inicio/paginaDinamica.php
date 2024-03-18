<?php
    include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
      <h3>Página Dinâmica</h3>
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

<?php
    include('../../rodape.php');
?>
