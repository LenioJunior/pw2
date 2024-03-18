<?php
  include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
    <h3>str_word_count</h3>
      <!-- Super tag PHP -->
      <?php
              $str = "HellÇo fri3nd, you're
                     looking          good today!";

              print_r(str_word_count($str, 1));
              echo "</br>";

              print_r(str_word_count($str, 2));
              echo "</br>";

              print_r(str_word_count($str, 1, 'àáãçÇ3 '));
              echo "</br>";

              echo str_word_count($str);
              echo "</br>";
       ?>
  </div>
</div>

<?php
  include('../../rodape.php');
?>