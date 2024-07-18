<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pw2/bootstrap-5.3.3/css/bootstrap.min.css">
    <title>Tabelas</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SCE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tabelas.php">Listar</a></li>
            <li><a class="dropdown-item" href="formProduto.php">Cadastrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">

  <div class="container">
    <a href="formProduto.php" class="btn btn-primary" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
      </svg>
    </a>

    <?php
         if(array_key_exists("insert", $_GET)){
            $nomeInserido = $_GET['produto'];

            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                O produto <strong>' . $nomeInserido . '</strong> foi inserido com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } 
        else if(array_key_exists("update", $_GET)){
            $nomeAtualizado = $_GET['produto'];

            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              O produto <strong>' . $nomeAtualizado . '</strong> foi atualizado com sucesso!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } 
        else if(array_key_exists("delete", $_GET)){
          $nomeExcluido = $_GET['produto'];

          echo '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            O produto <strong>' . $nomeExcluido . '</strong> foi excluído com sucesso!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
      }
    ?>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php
                $con = mysqli_connect("localhost", "root", "1234", "sce");

                if($con) {
                    $res = mysqli_query($con, "SELECT * FROM produto");
                    
                    if($res){
                        $cont = 1;
                        while($line = mysqli_fetch_assoc($res)){
                            $id = $line['id'];
                            $nome = $line['nome'];
                            $preco = $line['preco'];
                            echo
                            '<tr>
                                <th scope="row">' . $cont++ . '</th>
                                <td>' . $id . '</td>
                                <td>' . $nome . '</td>
                                <td>' . $preco . '</td>
                                <td>
                                <a class="icon-link" href="formProduto.php?editar=true&id='.$id.'">
                                    <svg class="bi" aria-hidden="true"><use xlink:href="#box-seam"></use></svg>
                                    Editar
                                </a>
                                <a class="icon-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                  data-idproduto="'.$id.'" data-nomeproduto="'.$nome.'">
                                    <svg class="bi" aria-hidden="true"><use xlink:href="#box-seam"></use></svg>
                                    Excluir
                                </a>                                                                                              
                                </td>
                            </tr>';
                        }
                    }            
                } else {
                    echo "mysqli_error($con)";
                }

            ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="modalMessage">                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" id="confirmButtom" class="btn btn-primary">Confirmar</button>
              </div>
            </div>
          </div>
        </div>
        </tbody> 
    </table> 
  </div>  
</body>
    
    <script src="/pw2/popper-2.9.2/popper.min.js"></script>
    <script src="../../jquery/jquery-3.7.1.min.js"></script>
    <script src="../../bootstrap-5.3.3/js/bootstrap.js"> </script>
    <script src="./tabelas.js"> </script>
    


</html>