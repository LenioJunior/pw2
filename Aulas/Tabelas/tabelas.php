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
            <li><a class="dropdown-item" href="cadastrar.php">Cadastrar</a></li>
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

    <?php
         if(array_key_exists("insert", $_GET)){
            $nome = $_GET['produto'];

            echo '
            <div class="alert alert-success" role="alert">
                O produto \'' . $nome . '\' foi inserido com sucesso!
            </div>';
        } else if(array_key_exists("update", $_GET)){
            $nome = $_GET['produto'];

            echo '
            <div class="alert alert-success" role="alert">
                O produto \'' . $nome . '\' foi atualizado com sucesso!
            </div>';
        }
    ?>

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
                            echo
                            '<tr>
                                <th scope="row">' . $cont++ . '</th>
                                <td>' . $id . '</td>
                                <td>' . $line['nome'] . '</td>
                                <td>' . $line['preco'] . '</td>
                                <td>
                                <a class="icon-link" href="cadastrar.php?editar=true&id='.$id.'">
                                    <svg class="bi" aria-hidden="true"><use xlink:href="#box-seam"></use></svg>
                                    Editar
                                </a>
                                <a class="icon-link" href="#">
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
        </tbody>
    </table>   
</body>
    
    <script src="/pw2/popper-2.9.2/popper.min.js"></script>
    <script src="../../jquery/jquery-3.7.1.min.js"></script>
    <script src="../../bootstrap-5.3.3/js/bootstrap.js"> </script>
    


</html>