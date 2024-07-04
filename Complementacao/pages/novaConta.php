<?php
    include('../cabecalho.php');
    include('../db/conecta.php');
    include('../dao/usuarioDao.php'); 
?>

<form class="row g-3" action="novaConta.php" method="POST">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" 
    placeholder="name@example.com" name="email">
    </div>
    <div class="mb-3">
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="senha" name="senha" class="form-control" 
            aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Criar</button>
    </div>
</form>

<?php
      if(array_key_exists('email', $_POST) && array_key_exists('senha', $_POST)){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //$acao = $_POST['acao'];
        
        $conexao = getConnection();
        $result = getUsuarioByEmail($conexao, $email);
        $usuarios = mysqli_fetch_assoc($result);

        if($usuarios == null || count($usuarios) == 0){
          $result = criarUsuario($conexao, $email, $senha);
          if($result){
            echo '
            <div class="alert alert-primary" role="alert">
              Usuário criado com sucesso!
            </div>
            ';
          } else {
            echo '
            <div class="alert alert-danger" role="alert">
              Ocorreu algum erro: ' . var_dump($result) . '
            </div>';
          }
        } else {
          echo '
          <div class="alert alert-danger" role="alert">
            Usuário já existe!
          </div>';
        }     

    }  
    ?>

<?php
	include('../rodape.php');
?>