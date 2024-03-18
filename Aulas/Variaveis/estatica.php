<?php
    include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
      <h3>Variáveis Estáticas</h3>
      <?php
        function incrementa () {
            static $num = 0;
            echo $num . "<br>";
            $num ++;
            }
            
            incrementa ();
            static $num = 10;
            echo $num . "<br>";
            incrementa ();
        ?>
  </div>
</div>

<?php
    include('../rodape.php');
?>