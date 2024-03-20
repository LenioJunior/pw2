<?php
/* A classe produto DAO é responsável pelas funções de inserir, alterar, excluir */

function insereProduto(mysqli $connection,$nome,$preco){
    
    $query = "insert into produto (nome,preco) values ('{$nome}',{$preco});";
    return mysqli_query($connection,$query);
}

function excluiProduto(mysqli $connection,$nome,$preco){
    
    $query = "delete from produto (nome,preco) values ('{$nome}',{$preco});";
    return mysqli_query($connection,$query);
}

function listaProdutos($connection){
    
    $query = "select * from produto;";
    return mysqli_query($connection,$query);    
}