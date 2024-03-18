<?php
    include('../../cabecalho.php');
?>

    <div class="container">
      <div class="jumbotron">
          <h2>Strings</h2>
          <h4><span class="label label-default">com aspas simples</span></h4>
          <?php
            $name = 'Lênio';
            echo '<p>\'Uma string definida com aspas simples escapando a aspas.\' Use \\ para escapar.</p>';
            echo '<p>"Uma string definida com aspas simples sem escape nas aspas duplas" </p>';
            echo '<p>Aqui \n deveria ter uma quebra de linha.</p>';
            echo '<p> Olá $name, saudações!!!</>';
          ?>

          <h4><span class="label label-default">com aspas duplas</span></h4>
          <?php
            echo "<p>\"Uma string definida com aspas duplas.\" Obrigatoriamente usa \ para escapar. </p>";
            echo "<p>'Uma string definida com aspas duplas sem escape nas aspas simples'</p>";
            echo "<p>Aqui \n deveria ter uma quebra de linha.</p>";
            echo "<p> Olá $name, saudações!!!</>";
          ?>

          <h4><span class="label label-default">heredoc</span></h4>
          <?php
            $string_heredoc = <<<STR
              <p>Esta é uma string declarada
              com a sintaxe heredoc.<p/>
STR;
            echo $string_heredoc;

            $string_heredoc = <<<STR
              <p>Olá $name, como vai?</br>
              Escrevo para lembrar das
              disciplinas "Redes" e 'PP'.</br>
              Estão nas pastas
              C:\\\\documentos.<p/>
STR;
            echo $string_heredoc;
          ?>

          <h4><span class="label label-default">nowdoc</span></h4>
          <?php
            $string_nowdoc = <<<'STR'
              <p>Olá $name, como vai?</br>
              Escrevo para lembrar das
              disciplinas "Redes" e 'PP'.</br>
              Estão nas pastas
              C:\\\\documentos.<p/>
STR;
            echo $string_nowdoc;
          ?>
          <p>
            Mais sobre <a href="http://php.net/manual/pt_BR/language.types.string.php">Strings</a>.
          </p>
      </div>
    </div>

<?php
  include('../../rodape.php');
?>
