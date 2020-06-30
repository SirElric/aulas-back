<?php 

function conexaoMysql ()
{
    $server = 'localhost';
    $user = 'root';
    $password = 'bcd127';
    $database = 'dbContatos20201A';
    
    /*
        mysql_connect
        mysqli_connect (procedural/POO)
        PDO (POO) ajuda contra SQLInjection
    */
    
    /* Realiza a conexão com o Banco de Dados Mysql */
    $conexao = mysqli_connect($server, $user, $password, $database);

    return $conexao;
}

?>