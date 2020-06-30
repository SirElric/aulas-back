<?php

    //verifica se existe a variavel modo
    if (isset($_GET['modo']))
    {
        //valida se o conteudo de "modo" é "inserir"
        if($_GET['modo'] == 'atualizar')
        {
            //Import da biblioteca de conexão
            require_once('conexao.php');

            //Abre a conexão com o BD
            $conex = conexaoMysql();

            //essa variavel foi enviada pelo form da pagina index que é PK do registro que precisa atualizar 
            $id = $_GET['id'];

            //Valida se o formulário foi submetido pelo usuário
            if(isset($_POST['btnEnviar']))
            {                
                //Resgatando os dados fornecidos pelo usuario, utilizando o metodo POST
                $nome = $_POST['txtNome'];
                $endereco = $_POST['txtEndereco'];
                $bairro = $_POST['txtBairro'];
                $cep = $_POST['txtCep'];
                $telefone = $_POST['txtTelefone'];
                $celular = $_POST['txtCelular'];
                $email = $_POST['txtEmail'];
                
                /*
                18/05/2020
                    
                Var[0] = 18
                Var[1] = 05
                Var[2] = 2020
                */
                
                //conversão da data brasileira em padrão americano, pois o BD só aceita o amaricano yyyy-mm-dd
                $dtNascimento = explode("/", $_POST['txtNascimento']);
                $dtNascimentoAmericano = $dtNascimento[2]."-".$dtNascimento[1]."-".$dtNascimento[0];
                
                $sexo = $_POST['rdoSexo'];
                $obs = $_POST['txtObs'];
                $idEstado = $_POST['sltEstados'];

                $sql = "update tblcontatos set

                            nome = '".$nome."',
                            endereco = '".$endereco."',
                            bairro = '".$bairro."',
                            cep = '".$cep."',
                            idEstado = ".$idEstado.",                                        
                            telefone = '".$telefone."',
                            celular = '".$celular."',
                            email = '".$email."',
                            sexo = '".$sexo."',
                            dtNasc = '".$dtNascimentoAmericano."',
                            obs = '".$obs."'

                            where idContato = ".$id;                         
                
                /* Executa o Script no BD */    
                if(mysqli_query($conex, $sql))
                {
                    echo("
                            <script> 
                                alert('Registro inserido com sucesso!');
                                location.href = '../index.php';
                            </script>
                            
                        ");
                    //header('location:index.php');   
                }
                else
                    echo("<script> 
                        alert('Erro ao executar o script!') 
                        window.history.back();
                    </script>");    

                
            }
        }      
    }
?>