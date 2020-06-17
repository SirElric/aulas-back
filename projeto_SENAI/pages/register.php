<?php
    require_once('../functions/header.php');
    require_once('../functions/footer.php');
    require_once('../functions/network.php');

    require_once('../db/connection.php');
    
    $connect = connectionMySQL();

    $action ="../db/insertDate.php?modo=inserir";

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
                        <form name="frmRegister" action="<?=$action?>" method="post">
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
                                    <input type="text" class="inputText" name="txtProfession" value="" placeholder="Insira sua profissão">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Genero:</h1>
                                    <label>
                                        <input type="radio" class="radio" name="rdoGender" value="0">Feminino
                                        <span class="checkmark"></span>
                                    </label>
                                    <label>
                                        <input type="radio" class="radio" name="rdoGender" value="1">Masculino
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="registerPart">
                                <div class="infoInput">
                                    <h1 class="infoType">e-mail:</h1>
                                    <input type="email" class="inputText" name="txtEmail" value="" placeholder="insira seu email">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Home page:</h1>
                                    <input type="text" class="inputText" name="txtHomePage" value="" placeholder="insira sua Homepage (opcional)">                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Facebook:</h1>
                                    <input type="email" class="inputText" name="txtFacebook" value="" placeholder="insira seu Facebook (opcional)">                                </div>
                                <div class="messageBox">
                                    <h1 class="infoType">Menssagem:</h1>
                                    <textarea name="obsMessage" id="textObs" cols="30" rows="10" placeholder="Nos envie uma menssagem"></textarea>
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Tipo de Mensagem:</h1>
                                    <label>
                                        <input type="radio" class="radio" name="rdoMessage" value="0">Sugestão
                                        <span class="checkmark"></span>
                                    </label>
                                    <label>
                                        <input type="radio" class="radio" name="rdoMessage" value="1">Critica
                                        <span class="checkmark"></span>
                                    </label>
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