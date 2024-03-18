<?php
  include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
    <h3>Concatenação não se faz com o sinal de adição</h3>
      <?php
        $string_value = "nota";
        $int_value = 10;

        echo "($string_value + $int_value)" . "</br>";
        echo "5 + \"alunos\"";

        echo ($string_value + $int_value) . "</br>";
        echo 5 + "alunos";            
      ?>
  </div>
</div>

<?php
  include('../../rodape.php');
?>

