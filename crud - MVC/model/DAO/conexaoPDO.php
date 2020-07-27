<?php

/**************************************************
 
    Nome da class: mysqlConnection()
    Objetivo: Criar a conexão com o BD MYSQL
    Data de Criação: 06/07/2020
    Autor: Erick Matheus

    Data da Modificação: 
    Autor da Modificação:
    Conteudo Modificado:

**************************************************/ 

// Classe para conexão com o banco de dados mySQL;
class mysqlConnection{

    // criação dos atributos da classe;
    private $server;
    private $user;
    private $password;
    private $database;

    // Metodo construtor da classe;
    public function __construct(){
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "bcd127";
        $this->database = "dbContatos20201A";
    }

    // Metodo para abrir a conexão com o banco de dados;
    public function connectDatabase(){

        try{
            // Criando o objeto conexão com a classe do PDO;
            $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->database,$this->user,$this->password);     

            // Recebe o retorno da conexão;
            return $conexao;

        }catch (PDOException $Erro){
            echo("
                    Erro ao conectar com o banco de dados;<br>
                    Linha: ".$Erro->getLine()."<br>
                    Menssagem de erro: ".$Erro->getMessage()
                );

        }
    }

    // Metodo para fechar a conexaõ com o banco de dados;
    public function closeDatabase(){
        $conexao = null;

        //mysqli_close();
    }
}

?>