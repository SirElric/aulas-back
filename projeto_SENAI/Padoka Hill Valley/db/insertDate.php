<?php

    //verifica se existe a variavel modo
    if (isset($_GET['modo']))
    {
        //valida se o conteudo de "modo" é "inserir"
        if($_GET['modo'] == 'inserir')
        {
            //Import da biblioteca de conexão
            require_once('connection.php');

            //Abre a conexão com o BD
            $connect = connectionMysql();

            //Valida se o formulário foi submetido pelo usuário
            if(isset($_POST['submitBtn']))   
            {
                $nome = $_POST['txtName'];
                $telefone = $_POST['txtTelephone'];
                $celular = $_POST['txtCellphone'];
                $profissao = $_POST['txtProfession'];
                $sexo = $_POST['rdoGender'];
                $email = $_POST['txtEmail'];
                $homePage = $_POST['txtHomePage'];
                $facebook = $_POST['txtFacebook'];
                $mensagem = $_POST['obsMessage'];
                $opcaoMensagem = $_POST['rdoMessage'];

                $sql = "insert into tblContact
                        (
                            clientName, telephone, cellphone, email, homePage, facebook, message,
                            optionMessage, gender, profession
                        )
                        values 
                        (
                            '".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$homePage."',
                            '".$facebook."', '".$mensagem."', ".$opcaoMensagem.", ".$sexo.",
                            '".$profissao."' 
                        )";
                        
                if(mysqli_query($connect, $sql))
                    {
                        echo("
                            <script> 
                                alert('Registro inserido com sucesso!');
                                location.href = '../register.php'; 
                            </script>
                                    
                        ");
                    //header('location:index.php');   
                    }else{
                        echo("<script> 
                            alert('Erro ao executar o script!') 
                            window.history.back();
                        </script>");   
                    }
                    
            }
        }      
    }
?>