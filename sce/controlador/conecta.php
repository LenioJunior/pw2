<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* Deve-se alterar os parâmetros para o ifsuldeminas */

function getConnection() {
    
    $host = "localhost";
    $user = "root";
    $password = "1234"; //ifsuldeminas (lab.04).
    $database = "sce";
    
    $conexao = mysqli_connect($host, $user, $password, $database);
    
    return $conexao;
    
}