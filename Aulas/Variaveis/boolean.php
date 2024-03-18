<?php
    include('../../cabecalho.php');
?>


<div class="container">
  <div class="jumbotron">
      <h3>Boolean</h3>
      <?php
        $must_print = True;
        $is_tested = FALSE;

        // Não é necessário fazer if ($must_print == true)
        if ($must_print) {
          print "Escreva";
        } else{
          print "Não escreva";
        }

        print "</br>";

        // Necessário testar a igualdade com false
        if ($is_tested == False){
          print "Precisa testar";
        }

        print "</br>";

        echo "0 é: ", 0 ? "true " : "false", "</br>";
        echo "0.0 é: ", 0.0 ? "true " : "false", "</br>";
        echo "\"\" é: ", "" ? "true " : "false", "</br>";
        echo "\"0\" é: ", "0" ? "true " : "false", "</br>";
        echo "array() é: ", array() ? "true " : "false", "</br>";
        echo "NULL é: ", NULL ? "true " : "false", "</br>";
        echo "-1 é: ", -1 ? "true " : "false", "</br>";
        echo "-2 é: ", -2 ? "true " : "false", "</br>";

        echo "Cast de 0 para boolean é: ", var_dump(10);

        print "</br>";

        echo "Cast de 1 para boolean é: ",var_dump((bool)1);
      ?>
  </div>
</div>

<?php
    include('../rodape.php');
?>