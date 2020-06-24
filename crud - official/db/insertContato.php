<?php
    //verifica se existe a variavel modo
    if (isset($_GET['modo']))
    {
        //valida se o conteudo de "modo" é "inserir"
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
                
                //Inicio - Código para fazer o upload de arquivos

                //Valida se o que esta chegando é um arquivo valido, size maior de 8 e type de arquivo diferente de vazio
                if( $_FILES['fileFoto']['size'] > 0 && $_FILES['fileFoto']['type'] != ""){

                    //Nome da pasta que foi criada para colocar os arquivos upados
                    $diretorioArquivo = "arquivos/";

                    //guardando o tamanho do arquivo
                    $arquivosSize = round($_FILES['fileFoto']['size']/1024);

                    //lista de extensões que serão permitidas no upload
                    $arquivosPermitidos = array("image/jpeg", "image/jpg", "image/png", "image/gif"); 

                    //Guardamos o tipo dearquivo que foi escolhido peplo usuario
                    $arquivosType = $_FILES['fileFoto']['type'];

                    //valida se a extenção do arquivo é permitido no upload
                    if(in_array($arquivosType, $arquivosPermitidos)){
                        
                        //Valida se tamanho do arquivo é de até 2MB
                        if($arquivosSize <= 2000){

                            //Guardando o nome do arquivo, utilizando a função patrhinfo()
                            //que permite desvincular o nome do arquivo da extenção 
                            $nomeArquivo = pathinfo($_FILES['fileFoto']['name'], PATHINFO_FILENAME);

                            //Guarda a extenção do nome do arquivo
                            $extemsaoArquivo = pathinfo($_FILES['fileFoto']['name'], PATHINFO_EXTENSION);

                            //Estamos gerando um nome de arquivo unico para fazer o upload no servidor.
                            //para fazer utilizamos o comandos:
                            //uniqid que gera uma sequencia aleatoria com base em uma configuração de hardwere
                            //time() que pega a hora, minuto e segundo e coloca junto da uniqid
                            //md5() para fazer a criptografia, tais como:
                                //existem outras formas de criptografia tais como:
                                    //md5()
                                    //sha1()
                                    //hash(tipo de criptogradia, var iaverl)
                            $nomeArquivoCripty = md5($nomeArquivo . uniqid(time()));

                            //juntamos novamente o nome do arquivo ja alterado com sua extenção original
                            $foto = $nomeArquivoCripty . "." . $extemsaoArquivo;

                            //Pasta temporaria que o form disponibilizou o arquivo a ser upado para o servidor
                            $arquivoTemp = $_FILES['fileFoto']['tmp_name'];

                            //Move para o servidor o arquivo da pasta temporaria para o diretorio criado no 
                            //servidor, alterando o nome do arquivo original, para o nome criptografado
                            if(move_uploaded_file($arquivoTemp, $diretorioArquivo.$foto)){

                                $sql = "insert into tblcontatos 
                                    (
                                        nome, endereco, bairro, cep, idEstado, 
                                        telefone, celular, email, sexo, dtNasc, obs, image
                                    )
                                    values 
                                    (
                                        '".$nome."', '".$endereco."', '".$bairro."', '".$cep."', ".$idEstado.",
                                        '".$telefone."', '".$celular."', '".$email."', '".$sexo."', '".$dtNascimentoAmericano."',
                                         '".$obs."', '".$foto."'
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
                                        echo("<script> 
                                            alert('Erro ao executar o script!') 
                                            window.history.back();
                                        </script>");   

                            }else{
                                echo("erro");
                            }

                        }else{
                            echo("não é permitido arquivo com tamanho maior que 2MB!");
                        }

                    }else{
                        echo("Arquivo selecionado não é permitido no sistema!");
                    }

                }else{
                    echo("Arquivo invalido na escolha da imagem!");
                }
            }
        }      
    }
?>