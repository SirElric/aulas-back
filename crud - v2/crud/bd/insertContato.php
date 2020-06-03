<?php 

//Verifica se existe a variavel modo
if (isset($_GET['modo']))
{
    //Valida se o conteudo de modo é inserir
    if($_GET['modo'] == 'inserir')
    {

        //Import da biblioteca de conexão
        require_once('conexao.php');

        //Abre a conexão com o BD
        $conex = conexaoMysql();

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


            $sql = "insert into tblcontatos 
                                (
                                    nome, endereco, bairro, cep, idEstado, 
                                    telefone, celular, email, sexo, dtNasc, obs
                                )
                                values 
                                (
                                    '".$nome."', '".$endereco."', '".$bairro."', '".$cep."', ".$idEstado.",
                                    '".$telefone."', '".$celular."', '".$email."', '".$sexo."', '".$dtNascimentoAmericano."', '".$obs."' 
                                )";



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
                    echo("
                        <script> 
                            alert('Erro ao executar o script!'); 
                            
                            //Permite voltar a página anterior sem perder
                            //os dados digitados no formulário
                            window.history.back();
                        
                        </script>
                        ");    


        }
    }
}


?>