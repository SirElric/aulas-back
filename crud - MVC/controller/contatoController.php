<?php

/**************************************************
 
    Nome da class: ContatoController()
    Objetivo: Criar toda a regra de negocio para o sistema
    (Ela vai intermediar a view e a model)
    Data de Criação: 13/07/2020
    Autor: Erick Matheus

    Data da Modificação: 
    Autor da Modificação:
    Conteudo Modificado:

**************************************************/ 

class ContatoController{
    
    public function __construct(){}

    public function inserirContato(){
        //Valida qual o metódo de requisição estará chegando pelo HTTP (POST, GET, PUT/PUSH e DELETE)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['txtNome'];
            $endereco = $_POST['txtEndereco'];
            $bairro = $_POST['txtBairro'];
            $cep = $_POST['txtCep'];
            $telefone = $_POST['txtTelefone'];
            $celular = $_POST['txtCelular'];
            $email = $_POST['txtEmail'];

            $dtNascimento = explode("/", $_POST['txtNascimento']);
            $dtNascimentoAmericano = $dtNascimento[2]."-".$dtNascimento[1]."-".$dtNascimento[0];
                
            $sexo = $_POST['rdoSexo'];
            $obs = $_POST['txtObs'];
            //$idEstado = $_POST['sltEstados'];

            require_once('model/contatoclass.php');

            //Istancia da class Contato
            $contato = new Contato();

            $contato->setNome($nome);
            $contato->setEndereco($endereco);
            $contato->setBairro($bairro);
            $contato->setCep($cep);
            $contato->setTelefone($telefone);
            $contato->setCelular($celular);
            $contato->setEmail($email);
            $contato->setDtNasc($dtNascimentoAmericano);
            $contato->setSexo($sexo);
            $contato->setObs($obs);
            $contato->setIdEstado(1);

            //Import da class Contato DAO
            require_once('model/DAO/contatoDAO.php');

            //Instancia da class DAO
            $contatoDAO = new ContatoDAO();

            //Chama o metodo para inserir o contato no BD
            $contatoDAO->insertContato($contato);

        }
    }

    public function atualizarContato(){}

    public function excluirContato(){}

    public function listarContato(){}

    public function buscarContato(){}

    //listar contatos em JSON (Para API ou para js manipular o front end)
    public function listarContatosJSON(){}

}

?>