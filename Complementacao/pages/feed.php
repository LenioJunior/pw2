<?php
    include('../cabecalho.php');
    include('../db/conecta.php');
    include('../dao/postsDao.php');
    include('novoFeed.php');
    include('dataHelper.php');    
?>

<?php
    $conexao = getConnection();

    $resultado = getPosts($conexao);
    $posts_array = array();

    while ($registro = mysqli_fetch_assoc($resultado)) {
        $id = $registro['id'];
        $conteudo = $registro['conteudo'];
        $pai = $registro['pai'];
        $data = $registro['data'];
        $conteudoComentario = 'Valor Fixo';        
      
        print("Pai: $pai   -   Id: $id </br>");

        $search = $pai;

        if(!isset($search)){
          $search = $id;
          if(!array_key_exists($search, $posts_array)){
            $search = 'parent';
          }          
        }

        if(!array_key_exists($search, $posts_array)){
          $posts_array[$search] = [];
        } 
        $posts_array[$search][] = $id;
        
        print "<pre>";
        print_r($posts_array);
        print "</pre>"; 
    }
?>

<?php
	include('../rodape.php');
?>