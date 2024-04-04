<?php 
    function getConection(){
        $server = "localhost";
        $user = "root";
        $password = "1234";
        $database = "social";
        return mysqli_connect($server,$user,$password,$database);
    }
?>