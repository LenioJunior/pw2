<?php
  include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
    <h3>strpos</h3>
      <!-- Super tag PHP -->
      <?php
        $frase = "Isso e uma frase uma outra uma";
        $palavra = "uma";
        $result = -1;
        $pos = 0;
        $posicoes = array();

        do {
            $result = strpos($frase, $palavra, $pos);

            //echo "Resultado: $result </br>";

            if($result != false){
                $pos = $result + 1;
                array_push($posicoes, $result);
            }
        } while ($result != false);

        echo "$frase </br>";
        echo strtoupper($frase) . "</br>";
        echo strtolower($frase) . "</br></br>";
        echo "As posicoes encontradas foram: </br>";
        var_dump($posicoes);

        echo "</br>";

        $array = array(4, 5, 6, "Teste", 3.45);
        var_dump($array);
        ?>
  </div>
</div>

<?php
  include('../../rodape.php');
?>