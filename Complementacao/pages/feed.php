<?php
    include('../cabecalho.php');
    include('../db/conecta.php');
    include('../dao/postsDao.php');
    include('processaFeed.php');
    include('novoFeed.php');
    include('dataHelper.php');    
?>

<?php
    $conexao = getConnection();

    $parents = getParentPosts($conexao);
    $childs = getChildPosts($conexao);

    // echo "<pre>";
    // print_r($parents);
    // echo "</pre>";
   
    //foreach ($parents as $parent) { 
    while($parent = mysqli_fetch_assoc($parents)){     
      $id = $parent['id'];
      $data = $parent['data'];
      $conteudo = $parent['conteudo'];
      echo '
        <div class="card mb-3 border-bottom" style="max-width: 640px;">
          <div class="row sizeComment">
            <div class="col-md-3">
              <img src="../img/lenio.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Lênio</h5>
                <p class="card-text"> '. $conteudo . ' </p>
                <p class="card-text"><small class="text-body-secondary">Publicado em: ' .  getDateFromStr($data) . '</small></p>
                <div class="text-center">
                  <div class="row sizeComment">
                    <div class="col-9">
                      <label for="inputComment" class="visually-hidden">Comentar</label>
                      <input type="textarea" class="form-control" id="inputComment" placeholder="Comentar">
                    </div>
                    <div class="col-3">
                      <button type="submit" data-post="'.$id.'" id="btnComentario" class="btn btn-primary mb-3">Comentar</button>
                    </div>
                  </div>
                </div>
              </div>      
            </div>
          </div>
          <div class="row justify-content-left sizeComment">
            <div class="col-4">
              <button type="submit" data-post="'.$id.'" id="btnCarregarComentario" class="btn btn-primary mb-3">Mais</button>
            </div>           
            <div class="col-4">
              Comentários:
            </div>    
          </div>
          <div class="row justify-content-center sizeComment" id="divComentario-'.$id.'"> ';

            mysqli_data_seek($childs,0);
            while($child = mysqli_fetch_assoc($childs)){
              $idChild = $child['id'];
              $idPai = $child['pai'];
              $dataChild = $child['data'];
              $conteudoChild = $child['conteudo'];

              if($idPai === $id){
                echo '
              
                    <div class="col-8">
                      <div class="post-header col align-self-start"> 
                        <div class="profile-pic">
                            <!-- <img src="../img/lenio.jpg" class="profile-pic" alt="..."> -->
                        </div> 
                        <div class="card-body">
                          <h5 class="card-title"> User Comment</h5>
                          <p class="card-text">' . $conteudoChild . '</p>
                        </div>
                    </div>
                  </div>';
              }
            };
                  
        echo '               
          
        </div>';
    }

    // foreach ($registros as $registro) {
    //   // $conteudo = $registro['parent'];
    //   // $data = $registro["$conteudo"];
    //   // $conteudoComentario = 'Valor Fixo'; 

    //   //echo "$data - $conteudo";
    //   echo "$registro";
    // }



        
?>

<?php
	include('../rodape.php');
?>