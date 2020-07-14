<?php

/**************************************************
 
    Nome da class: contato()
    Objetivo: Criar o Objeto Contatos (get e set)
    Data de Criação: 13/07/2020
    Autor: Erick Matheus

    Data da Modificação: 
    Autor da Modificação:
    Conteudo Modificado:

**************************************************/ 

class Contato{

    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $idEstado;
    private $telefone;
    private $celular;
    private $email;
    private $dtNasc;
    private $sexo;
    private $obs;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro =$bairro;
    }

    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getIdEstado(){
        return $this->idEstado;
    }
    public function setIdEstado($idEstado){
        $this->idEstado = $idEstado;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getDtNasc(){
        return $this->dtNasc;
    }
    public function setDtNasc($dtNasc){
        $this->dtNasc = $dtNasc;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getObs(){
        return $this->obs;
    }
    public function setObs($obs){
        $this->obs = $obs;
    }

    public function __construct(){}
}

?>