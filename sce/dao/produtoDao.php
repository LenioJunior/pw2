<?php
/* A classe produto DAO é responsável pelas funções de inserir, alterar, excluir */

/**
 * Adiciona um produto na tabela produto
 * @param type $connection conexão com o banco.
 * @param type $nome o nome do produto.
 * @param type $preco o preço do produto
 * @return type um boolean true informando sucesso ou false em caso de problema.
 */
function insereProduto($connection,$nome,$preco){
    
    $query = "insert into produto (nome,preco) values('{$nome}',{$preco});";
    echo $query;
    return mysqli_query($connection,$query);
    
}

function excluiProduto($connection,$nome,$preco){
    
    $query = "delete from produto (nome,preco) values('{$nome}',{$preco});";
    echo $query;
    return mysqli_query($connection,$query);
    
}