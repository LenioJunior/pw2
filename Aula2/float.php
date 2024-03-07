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
          <h2>Floats</h2>
          <?php
            function float_max($mul = 2, $affine = 1) {
                $max = 1; $omax = 0;
                while((string)$max != 'INF') { $omax = $max; $max *= $mul; }

                for($i = 0; $i < $affine; $i++) {
                  $pmax = 1; $max = $omax;
                  while((string)$max != 'INF') {
                    $omax = $max;
                    $max += $pmax;
                    $pmax *= $mul;
                  }
                }
                return $omax;
            }

            $hundred_point_five = 100.5;
            $fifty_point_ninty_nine = 50.99;

            echo "$hundred_point_five + $fifty_point_ninty_nine = ", $hundred_point_five + $fifty_point_ninty_nine, "</br>";
            echo "$hundred_point_five - $fifty_point_ninty_nine = ", $hundred_point_five - $fifty_point_ninty_nine, "</br>";
            echo "$hundred_point_five / $fifty_point_ninty_nine = ", number_format($hundred_point_five / $fifty_point_ninty_nine, 4, ',', '.'), "</br>";
            echo "$hundred_point_five * $fifty_point_ninty_nine = ", number_format($hundred_point_five * $fifty_point_ninty_nine, 2, ',', '.'), "</br>";

            echo "Tamanho do float: 8 bytes</br>";
            echo "Valor máximo do float: ~1.8e308 com precisão ~14 dígitos </br>";

            $max_float = 1.8e308;
            echo "Float grande: $max_float </br>";
            echo "Float grande:", float_max(), "</br>";

            $f1 = 1.23456789;
            $f2 = 1.23456780;
            $epsilon = 0.00000001;

            if(abs($f2-$f1) < $epsilon) {
                echo "$f1 e $f2 são iguais </br>";
            } else echo "$f1 e $f2 são diferentes </br>";

            $a = 123456.1234; // => 123.456,12
            $b = 1234.0123; // => 1.234,012
            $c = 1234.5698; // => 1234.57)
            echo number_format($a, 2, ",", "."), "</br>";
            echo number_format($b, 3, ",", "."), "</br>";
            echo number_format($c, 2, ".", ""), "</br>";
          ?>
          </br>
          <p>
            Estude as funções
                <a href="https://www.php.net/manual/pt_BR/function.printf">printf</a> e
                <a href="https://www.php.net/manual/pt_BR/function.sprintf.php">sprintf</a>.
          </p>
      </div>
    </div>

    <!-- jQuery (necessário para os plugins JavaScritp do Bootstrap (https://jquery.com/) -->
    <!-- <script src="../bootstrap-5.3.3/js/jquery.min.js"></script> -->
    <!-- Plugins para JavaScript do Bootstrap -->
    <script src="../bootstrap-5.3.3/js/bootstrap.min.js"></script>
  </body>
</html>
