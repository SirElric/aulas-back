<?php
    require_once('functions/header.php');
    require_once('functions/footer.php');
    require_once('functions/network.php');

    require_once('db/connection.php');
    
    $connect = connectionMySQL();

    $action ="db/insertDate.php?modo=inserir";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Padoka Hill Valley
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/register.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="image/icones/bread.png">
    </head>
    <body>

        <!-- import php header -->            
        <?php echo(headerSite()); ?>

        <main>
            <div id="mainBox">
                <div id="contentBox">
                    <div id="registerBox">
                        <form id="form-contact" name="frmRegister" action="<?=$action?>" method="post">
                            <input id="name" type="text" class="inputText" name="txtName" value="" placeholder="Nome">                                
                            <input id="tellphone" type="tel" class="inputText" name="txtTelephone" value="" placeholder="Telefone">                                
                            <input id="cellphone" type="tel" class="inputText" name="txtCellphone" value="" placeholder="Celular">                                
                            <input id="profession" type="text" class="inputText" name="txtProfession" value="" placeholder="profissão">                                
                            <label id="female">
                               <input type="radio" class="radio" name="rdoGender" value="0">Feminino
                                <span class="checkmark"></span>
                            </label>
                            <label id="male">
                                <input type="radio" class="radio" name="rdoGender" value="1">Masculino
                                <span class="checkmark"></span>
                            </label>                                
                            <input id="email" type="email" class="inputText" name="txtEmail" value="" placeholder="E-mail">                                
                            <input id="homepage" type="text" class="inputText" name="txtHomePage" value="" placeholder="Homepage (opcional)">                       
                            <input id="facebook" type="email" class="inputText" name="txtFacebook" value="" placeholder="Facebook (opcional)">                                
                            <textarea id="message" name="obsMessage" cols="30" rows="10" placeholder="Menssagem"></textarea>                                
                            <label id="suggestion">
                                <input type="radio" class="radio" name="rdoMessage" value="0">Sugestão
                                <span class="checkmark"></span>
                            </label>
                            <label id="review">
                                <input type="radio" class="radio" name="rdoMessage" value="1">Critica
                                <span class="checkmark"></span>
                            </label>                                
                            <input id="submit" type="submit" class="submit" name="submitBtn" value="Enviar">
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