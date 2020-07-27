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
        //Import da class de conexão
        require_once('conexaoPDO.php');
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

        //Instancia da class mysqlConection()
        $conexao = new mysqlConnection();

        //Abre conexão com banco de dados
        $PDOconexao = $conexao->connectDatabase();

        //Executa o script SQL no banco de dados
        if ($PDOconexao->query($sql)) {
            header('location:index.php');
        }else {
            echo("Erro ao executar script");
            echo($sql);
        }

    }

    // Metodo para atualizar um contato do BD;
    public function updateContato(){

    }

    // Metodo para Excluir um contato do BD;
    public function deleteContato($idContato){
        $sql="delete from tblContatos where idContato = ".$idContato;

        //Instancia da class mysqlConection()
        $conexao = new mysqlConnection();

        //Abre conexão com banco de dados
        $PDOconexao = $conexao->connectDatabase();

        //Executa o script SQL no banco de dados
        if ($PDOconexao->query($sql)) {
            header('location:index.php');
        }else {
            echo("Erro ao executar script");
            echo($sql);
        }
    }

    // Metodo para Pegar todos contatos do BD;
    public function selectAllContato(){
        $sql = "Select * from tblContatos order by idContato desc";

        //Instancia da class mysqlConnection
        $conexao = new mysqlConnection();

        //Abre a conexa~com o banco de dados
        $PDOconexao = $conexao->connectDatabase();

        //Executa o script no banco e recebe o retorno dos dados
        $select = $PDOconexao->query($sql);

        $cont = 0;

        //Repetição para extrair os dados do banco e criar um objeto contato
        while ($rsContatos = $select->fetch(PDO::FETCH_ASSOC)){
            $listContatos[] = new Contato();
            $listContatos[$cont]->setIdContato($rsContatos['idContato']);
            $listContatos[$cont]->setNome($rsContatos['nome']);
            $listContatos[$cont]->setEndereco($rsContatos['endereco']);
            $listContatos[$cont]->setBairro($rsContatos['bairro']);
            $listContatos[$cont]->setCep($rsContatos['cep']);
            $listContatos[$cont]->setIdEstado($rsContatos['idEstado']);
            $listContatos[$cont]->setTelefone($rsContatos['telefone']);
            $listContatos[$cont]->setCelular($rsContatos['celular']);
            $listContatos[$cont]->setEmail($rsContatos['email']);
            $listContatos[$cont]->setDtNasc($rsContatos['dtNasc']);
            $listContatos[$cont]->setSexo($rsContatos['sexo']);
            $listContatos[$cont]->setObs($rsContatos['obs']);

            $cont+=1;
        }

        //chama o metodo para fechar a conexão
        $conexao->closeDatabase();
        
        //Verifica se existe o objeto para retornar para a controller,
        //se a tabela estiver vazia o objeto não vai existir
        if (isset($listContatos)) {
            return $listContatos;
        }
    }

    // Metodo para Pegar um contato do BD;
    public function selectByIdContato(){

    }
}

?>