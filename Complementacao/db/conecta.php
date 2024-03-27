<?php

    function getConnection() {
        $hostname = "localhost";
        $username = "root";
        $password = "1234";
        $database = "scif";

        return mysqli_connect($hostname, $username, $password, $database);
    }

?>