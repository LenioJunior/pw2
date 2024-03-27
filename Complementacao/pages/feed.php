<?php
    include('../cabecalho.php');
    include('../db/conecta.php');
    include('../dao/postsDao.php');
    include('novoFeed.php');
    include('dataHelper.php');    
?>

<div class="card mb-3 border-bottom" style="max-width: 540px;">
  <div class="row">
    <div class="col-md-3">
      <img src="../img/lenio.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Lênio</h5>
        <p class="card-text"> conteudo '</p>
        <p class="card-text"><small class="text-body-secondary">Publicado em: </small></p>
        <div class="container text-center">
          <div class="row">
            <div class="col-9">
              <label for="inputComment" class="visually-hidden">Comentar</label>
              <input type="textarea" class="form-control" id="inputComment" placeholder="Comentar">
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-primary mb-3">Comentar</button>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
  <div class="row justify-content-left">
    <div class="col-4">
      Comentários:
    </div>    
  </div>
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="post-header col align-self-start"> 
        <div class="profile-pic">
            <!-- <img src="../img/lenio.jpg" class="profile-pic" alt="..."> -->
        </div> 
        <div class="user-info"> 
            <div class="full-name">IF Messaging</div> 
        </div> 
      </div> 
    </div>
  </div>
</div>



<?php
    $conexao = getConnection();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $postContent = $_POST['post-desc'];
      $parent = 1;
      $date = 1;

      if(!insertPost($conexao, $postContent, $parent, $date)){        
        $error_sql = mysqli_error($connection);
        echo("<h4><p class='text-danger text-center'>Post não efetivado </p></h4>");
        echo("<h4><p class='text-danger text-center'>Error  : {$error_sql} </p></h4>");
      }      
    }

    $resultado = getPosts($conexao);

    while ($registro = mysqli_fetch_assoc($resultado)) {
        $id = $registro['id'];
        $conteudo = $registro['conteudo'];
        $pai = $registro['pai'];
        $data = $registro['data'];

        echo '<div class="card mb-3" style="max-width: 540px;">
        <div class="row">
          <div class="col-md-3">
            <img src="../img/lenio.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Lênio</h5>
              <p class="card-text"> '. $conteudo . '</p>
              <p class="card-text"><small class="text-body-secondary">Publicado em: ' 
              .  getDateFromStr($data) .
              '</small></p>
            </div>
          </div>
        </div>
      </div>';
    }
?>

<?php
	include('../rodape.php');
?>