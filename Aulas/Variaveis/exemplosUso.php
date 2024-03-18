<?php
    include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
    <h3>Exemplos de Uso</h3>
     <?php      
        $num = 1;
        var_dump($num);
        echo "<br>";

        $str = "texto";
        var_dump($str);
        echo "<br>";

        $arr = array(1, "Lenio", 5.34, array(3,4));
        var_dump($arr);
        echo "<br>";
        
        $x = 1.9e331 ;
        echo is_infinite($x);
        echo "<br>";
        var_dump($x);
        echo "<br>";

        $y = acos(8);
        var_dump($y);
        echo "<br>";

        var_dump ( is_numeric (5985)); 
        echo "<br>";
        var_dump ( is_numeric ("5985")); 
        echo "<br>";
        var_dump ( is_numeric ("59.85" + 100)); 
        echo "<br>";
        echo "59.85" + 100;
        echo "<br>";
        var_dump ( is_numeric ("10 Hello ")); 

     ?>
  </div>
</div>

<?php
    include('../rodape.php');
?>