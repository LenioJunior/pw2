<?php 
  include("../DB/conecta.php");
  include("../dao/publicacoesDao.php");
  include("novoPost.php");
?>

<?php
    $resultado = getPosts(getConection());
    echo "</br>";

    while ($registro = mysqli_fetch_assoc($resultado)) {
        $id = $registro["id"];
        $pai = $registro["pai"];
        $conteudo = $registro["conteudo"];
        $usuario = $registro["usuario"];
        $data = $registro["data"];
        $nome = $registro["nome"];

        /*echo'<div class="card">
                <div class="card-body">
                    '.$conteudo.'
                </div>
            </div>';*/
        echo '<div class="container">
                <form class="row g-3 needs-validation" action="" novalidate>
                  <div class="col-md-12">
                    '.$nome.': '.$conteudo.'
                  </div> 
                </form>
              </div>';
        //echo "$id - $pai - $conteudo -$usuario- $data</br>";
    }
?>