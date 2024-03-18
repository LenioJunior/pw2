<?php
    include('../../cabecalho.php');
?>

<div class="container">
  <div class="jumbotron">
      <h3>Classes no PHP</h3>
      <!-- Super tag PHP -->
      <?php  

        class Carro {
            public $cor ;
            public $modelo ;
            public function __construct ( $cor , $modelo ) {
                $this->cor = $cor ;
                $this -> modelo = $modelo ;
            }
            public function mensagem () {
                return " Carro de cor " . 
                $this -> cor . " e modelo " . 
                    $this -> modelo ;
            }
        }

        $carro1 = new Carro (" verde " , " Ford ");
        echo $carro1 -> mensagem ();

        ?>
  </div>
</div>

<?php
    include('../../rodape.php');
?>


