<?php

    function connectionMySQL () {

        $server='localhost';
        $user='root';
        $password='bcd127';
        $database='dbPadokaHillValley';

        $connection = mysqli_connect($server, $user, $password, $database);
        return $connection;
    }
?>