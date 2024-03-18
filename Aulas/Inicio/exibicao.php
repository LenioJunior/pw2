<?php
    include('../../cabecalho.php');
?>
<div class="container">
  <div class="jumbotron">
    <h3>Exibição de Informações</h3>
      <?php
        echo "Oi bom dia!" . "<br>";
        echo "Oi bom dia!<br>";
        echo 'Oi bom dia!<br>';
        $A = "Bom";
        $B = "Dia";
        echo 5 + /*5 +*/ 5 . "<br>";
        echo "$A $B <br>";
        echo $A . " " . $B . "<br>";
        var_dump($A);
        echo "Hoje", "é", "um", "dia", "bacana<br>";
        //print "Hoje", "é", "um", "dia", "bacana";
        $R = array('aa', 'bbb', 'cccc', 1, 2, array('d', 'e'));
        var_dump($R);
      ?>
  </div>
</div>
     
<?php
  include('../../rodape.php');
?>