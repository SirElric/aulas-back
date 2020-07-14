<?php

/**************************************************
 
    Nome da class: contatoDAO()
    Objetivo: Manipular dados com BD MYSQL referente a contatos
    Data de Criação: 06/07/2020
    Autor: Erick Matheus

    Data da Modificação: 
    Autor da Modificação:
    Conteudo Modificado:

**************************************************/ 

class contatoDAO{

    // Construtor da classe;
    public function __construct(){
        
    }

    // Metodo para inserir um novo contato no BD;
    public function insertContato(Contato $contato){
        $sql = "insert into tblcontatos 
                        (
                        nome, endereco, bairro, cep, obs, 
                        telefone, celular, email, sexo, dtNasc, idEstado
                        )
                    values 
                        (
                        '".$contato->getNome()."',
                        '".$contato->getEndereco()."',
                        '".$contato->getBairro()."',
                        '".$contato->getCep()."',
                        '".$contato->getObs()."',
                        '".$contato->getTelefone()."',
                        '".$contato->getCelular()."',
                        '".$contato->getEmail()."',
                        '".$contato->getSexo()."',
                        '".$contato->getDtNasc()."',
                        ".$contato->getIdEstado()."
                    )";

        echo($sql);
    }

    // Metodo para atualizar um contato do BD;
    public function updateContrato(){

    }

    // Metodo para Excluir um contato do BD;
    public function deleteContrato(){

    }

    // Metodo para Pegar todos contatos do BD;
    public function selectAllContrato(){

    }

    // Metodo para Pegar um contato do BD;
    public function selectByIdContrato(){

    }
}

?>