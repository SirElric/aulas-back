<?php 
/*Conexão com o Banco de Dados
    Temos 3 bibliotecas de conexão com o Mysql
    
    mysql_connect() - Biblioteca de conexão mais antiga nas versões do PHP (apenas conexão estruturada)
        mysql_connect(server, user, password)
        mysql_select_db(databaseName)
    
    mysqli_connect() - Biblioteca mais atualizada (permite conexão de forma estruturada e orientada a objetos)
        mysqli_connect(server, user, password, databaseName)
        
    PDO - Biblioteca com muito mais recursos de conexão, e é especifica para orientação a objetos (tem um nivel de segurança mais atualizado)



*/

//Import da biblioteca de conexão
require_once('bd/conexao.php');

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
                    location.href = 'index.php';
                </script>
                
            ");
        //header('location:index.php');   
    }
    else
        echo("<script> alert('Erro ao executar o script!') </script>");    

    
}




?>
<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro </title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <!-- 
            placeholder - permite colocar uma label dentro da caixa para informar ao usuario a ação
            required - permite fazer a validação de caixa vazia pelo html5
            pattern - permite criar validações com formatos de mascara
                    Ex: pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" - mascara de telefone
            
            <input type = "tel" - indica a digitação de telefone na caixa
                          "email" - indica a digitação de email na caixa
                          "url" -  indica a digitação de uma url valida na caixa
                          "number" - indica a digitação de numeros na caixa
                          "range" - indica a seleção de numeros através de uma barra de seleção
                          "color" - indica a escolha de uma cor por uma seleção e retorna o hexadecimal
                            
                          Obs: tomar cuidado pois não funciona em todos os navegadores

                              date - exibe um calendário a ser utilizado pelo usuário
                              month - exibe um calendario apenas de meses
                              week - exibe um calendario com base nas semanas
            


        -->
        
        <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Contatos </h1>
            </div>
            <div id="cadastroInformacoes">
                <form action="index.php" name="frmCadastro" method="post">
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Nome: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtNome" value="" placeholder="Insira seu nome" required pattern="[a-z A-Z ã á ó õ]*">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Endereço: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtEndereco" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Bairro: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtBairro" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Cep: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtCep" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Estados: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <select name="sltEstados">
                                <option value="" selected> Selecione um item </option>
                                <?php 
                                
                                //Script para listar todos os estados em ordem crescente pelo nome
                                $sql = "select * from tblestados order by nome";
                                
                                //Executa o scrip no BD
                                $selectEstados = mysqli_query($conex, $sql);
                                
                                /*
                                
                                Converte o resultado do BD usando um metodo de fetch para conseguirmos trabalhar os dados no PHP
                                
                                Ex:
                                    mysqli_fetch_array()
                                    mysqli_fetch_assoc()
                                    mysqli_fetch_object()
                                    
                                RS (Record Set)
                                */
                                
                                //Estrutura de repetição para carregar os estados no objeto select
                                while ($rsEstados = mysqli_fetch_assoc($selectEstados))
                                {
                                ?>
                                    <option value="<?=$rsEstados['idEstado']?>"><?=$rsEstados['nome']?></option>
                                <?php 
                                }
                                
                                ?>
             
                            </select>
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Telefone: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtTelefone" value="" pattern="[0-9]{3} [0-9]{4}-[0-9]{4}" placeholder="Formato exigido: 999 9999-9999">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Celular: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtCelular" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Email: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtEmail" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Data de Nascimento: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtNascimento" value="">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                           Sexo:
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="radio" name="rdoSexo" value="F">Feminino.
                            <input type="radio" name="rdoSexo" value="M">Masculino.
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <p> Observações: </p>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <textarea name="txtObs" cols="50" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="Salvar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="consultaDeDados">
            <table id="tblConsulta" >
                <tr>
                    <td id="tblTitulo" colspan="5">
                        <h1> Consulta de Dados.</h1>
                    </td>
                </tr>
                <tr id="tblLinhas">
                    <td class="tblColunas"> Nome </td>
                    <td class="tblColunas"> Celular </td>
                    <td class="tblColunas"> Estado </td>
                    <td class="tblColunas"> Email </td>
                    <td class="tblColunas"> Opções </td>
                </tr>
                
                <?php
                    
                    //Script para selecionar todos os registros
                    $sql = "
                            SELECT tblcontatos.idContato, tblcontatos.nome as nomeContato, tblcontatos.celular, tblcontatos.email, 
                            tblestados.sigla, tblestados.nome as nomeEstado
                            FROM tblcontatos, tblestados
                            WHERE tblestados.idEstado = tblcontatos.idEstado
                            order by tblcontatos.idContato desc;
  
                    ";
                    
                    //Envia o script para o BD.
                    $selectContatos = mysqli_query($conex, $sql);
                
                    //Estrtutura de repetição para listar os contatos na lista, utilizamos a função mysqli_fetch_assoc() para transformar o resultado do BD em um ArratList.
                    while ($rsContatos = mysqli_fetch_assoc($selectContatos))
                    {

                        ?>
                        <tr id="tblLinhas">
                            <td class="tblColunas"><?=$rsContatos['nomeContato']?></td>
                            <td class="tblColunas"><?=$rsContatos['celular']?></td>
                            <td class="tblColunas"><?=$rsContatos['sigla'] . " - " . $rsContatos['nomeEstado']?></td>
                            <td class="tblColunas"><?=$rsContatos['email']?></td>
                            <td class="tblColunas"> 
                                <div class="tblImagens">
                                    <a onclick="return confirm('Deseja realmente excluir o registro?');" href="bd/deleteContato.php?modo=excluir&id=<?=$rsContatos['idContato']?>">
                                        <div class="fechar"></div>
                                    </a>
                                    <div class="pesquisar"></div>
                                    <div class="editar"></div>
                                </div>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                
                <tr id="tblLinhas">
                    <td class="tblColunas">  </td>
                    <td class="tblColunas">  </td>
                    <td class="tblColunas">  </td>
                    <td class="tblColunas">  </td>
                    <td class="tblColunas">  </td>
                </tr>
                
            </table>

        </div>
    </body>
</html>