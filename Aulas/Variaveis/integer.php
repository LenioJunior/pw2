<?php
    include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
      <h3>Integer</h3>
      <?php
        $hundred = 100;
        $fifty = 50;

        echo "$hundred + $fifty = ", $hundred + $fifty, "</br>";
        echo "$hundred - $fifty = ", $hundred - $fifty, "</br>";
        echo "$hundred / $fifty = ", $hundred / $fifty, "</br>";
        echo "$hundred * $fifty = ", $hundred * $fifty, "</br>";
        echo "$hundred % $fifty = ", $hundred % $fifty, "</br>";

        echo "Tamanho do inteiro: ", PHP_INT_SIZE, " bytes</br>";
        echo "Valor máximo do inteiro: ", PHP_INT_MAX, "</br>";
        echo "Testanto o valor máximo do inteiro: ", pow(2, 64) / 2, "</br>";

        $float = PHP_INT_MAX * 2;
        echo "Um inteiro muito grande é convertido em float $float (var_dump: ", var_dump($float), ")</br>";

        $octal = 0o107;
        echo "Digitos inválidos em um octal (0109) são ignorados: ", $octal, " (var_dump: ", var_dump($octal), "</br>";

        $string_as_int = "123";
        $int_from_a_string = (int)$string_as_int;
        echo "\"123\" to int ", $int_from_a_string, " (var_dump: ", var_dump($int_from_a_string), "</br>";

        $float = 2.4;
        $int_from_a_float = intval($float);
        echo "2.4 to int ", $int_from_a_float, " (var_dump: ", var_dump($int_from_a_float), "</br>";
      ?>
  </div>
</div>

<?php
    include('../rodape.php');
?>
