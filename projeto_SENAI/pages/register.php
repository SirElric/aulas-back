<?php
    require_once('../functions/header.php');
    require_once('../functions/footer.php');
    require_once('../functions/network.php');

    require_once('../db/connection.php');
    
    $connect = connectionMySQL();

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

        $sql = "insert into tblContato
                (
                    nameContact, telephone, cellphone, email, homePage, facebook, message,
                    optionMessage, gender, profession
                )
                values 
                (
                    '".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$homePage."',
                    '".$facebook."', '".$mensagem."', '".$opcaoMensagem."', '".$sexo."',
                    '".$profissao."' 
                )";
                
        if(mysqli_query($connect, $sql))
            {
                echo("
                    <script> 
                        alert('Registro inserido com sucesso!');
                    </script>
                            
                ");
            //header('location:index.php');   
            }else{
                echo("<script> alert('Erro ao executar o script!') </script>");    
            }
            
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Padoka Hill Valley
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../css/register.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="shortcut icon" href="../image/icones/bread.png">
    </head>
    <body>

        <!-- import php header -->            
        <?php echo(headerMenu()); ?>

        <main>
            <div id="mainBox">
                <div id="contentBox">
                    <div id="registerBox">
                        <form name="frmRegister" action="register.php" method="post">
                            <div class="registerPart">
                                <div class="infoInput">
                                    <h1 class="infoType">Nome:</h1>
                                    <input type="text" class="inputText" name="txtName" value="" placeholder="Insira seu nome">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Telefone:</h1>
                                    <input type="tel" class="inputText" name="txtTelephone" value="" pattern="[0-9]{3} [0-9]{8}" placeholder="DDD + Telefone">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Celular:</h1>
                                    <input type="tel" class="inputText" name="txtCellphone" value="" pattern="[0-9]{3} [0-9]{9}" placeholder="DDD + Celular">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Profissão:</h1>
                                    <input type="text" class="inputText" name="txtProfession" value="" placeholder="Obrigatorio">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Genero:</h1>
                                    <input type="radio" class="radioOption" name="rdoGender" value="f">Feminino
                                    <input type="radio" class="radioOption" name="rdoGender" value="m">Masculino
                                </div>
                            </div>
                            <div class="registerPart">
                                <div class="infoInput">
                                    <h1 class="infoType">e-mail:</h1>
                                    <input type="email" class="inputText" name="txtEmail" value="" placeholder="Obrigatorio">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Home page:</h1>
                                    <input type="text" class="inputText" name="txtHomePage" value="" placeholder="Opcional">                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Facebook:</h1>
                                    <input type="email" class="inputText" name="txtFacebook" value="" placeholder="Opcional">                                </div>
                                <div class="messageBox">
                                    <h1 class="infoType">Message:</h1>
                                    <textarea name="obsMessage" id="textObs" cols="30" rows="10" placeholder="Obrigatorio"></textarea>
                                </div>
                                <div class="infoInput">
                                    <input type="radio" class="radioOption" name="rdoMessage" value="s">Sugestão
                                    <input type="radio" class="radioOption" name="rdoMessage" value="c">Critica
                                </div>
                                <div class="infoInput">
                                    <input type="submit"  class="submit" name="submitBtn" value="Enviar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="emptyBox">
                    <?php echo(socialNetwork()); ?>
                </div>
            </div>
        </main>

       <!-- import php footer function -->
       <?php echo(footerMenu()); ?>
    </body>
</html>