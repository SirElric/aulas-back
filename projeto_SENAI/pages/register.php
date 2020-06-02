<?php
    require_once('../functions/header.php');
    require_once('../functions/footer.php');
    require_once('../functions/network.php');
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
                        <form name="frmRegister" action="register.html" method="post">
                            <div class="registerPart">
                                <div class="infoInput">
                                    <h1 class="infoType">Nome:</h1>
                                    <input type="text" class="inputText" name="txtName" value="">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Telefone:</h1>
                                    <input type="tel" class="inputText" name="txtName" value="">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Celular:</h1>
                                    <input type="tel" class="inputText" name="txtName" value="">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Profissão:</h1>
                                    <input type="text" class="inputText" name="txtName" value="">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Genero:</h1>
                                    <input type="radio" class="radioOption" name="genre" value="f">Feminino
                                    <input type="radio" class="radioOption" name="genre" value="m">Masculino
                                </div>
                            </div>
                            <div class="registerPart">
                                <div class="infoInput">
                                    <h1 class="infoType">e-mail:</h1>
                                    <input type="email" class="inputText" name="txtName" value="">
                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Home page:</h1>
                                    <input type="text" class="inputText" name="txtName" value="">                                </div>
                                <div class="infoInput">
                                    <h1 class="infoType">Facebook:</h1>
                                    <input type="email" class="inputText" name="txtName" value="">                                </div>
                                <div class="messageBox">
                                    <h1 class="infoType">Message:</h1>
                                    <textarea name="obsMessage" id="textObs" cols="30" rows="10"></textarea>
                                </div>
                                <div class="infoInput">
                                    <input type="radio" class="radioOption" name="message" value="s">Sugestão
                                    <input type="radio" class="radioOption" name="message" value="c">Critica
                                </div>
                                <div class="infoInput">
                                    <input type="submit"  class="submit" name="submit" value="Enviar">
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