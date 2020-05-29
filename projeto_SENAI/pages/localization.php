<?php
    require_once('../functions/header.php');
    require_once('../functions/footer.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Padoka Hill Valley
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/localization.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="shortcut icon" href="../image/icones/bread.png">
    </head>
    <body>

        <!-- import php header -->            
        <?php echo(headerMenu()); ?>

        <main>
            <div id="mainBox">
                <div id="contentBox">
                    <div id="localizationBox">
                        <div class="title">
                            <h1>Localização:</h1>
                        </div>
                        <div class="mapBox">
                            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.103052084892!2d-46.900270784846555!3d-23.528795666275997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0154039cb55b%3A0xadf34a919f156950!2sSENAI%20Jandira%20-%20Professor%20Vicente%20Amato!5e0!3m2!1spt-BR!2sbr!4v1585676000061!5m2!1spt-BR!2sbr" 
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>
                        <div class="contact">
                            <ul>
                                <li>e-mail:xxxxxxxxxx@gmail.com</li>
                                <li>Telefone:xxxx-xxxx</li>
                                <li>celular:xxxxx-xxxx</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="emptyBox">
                    <div id="redesBox">
                        <a><img class="redesIcon" src="../image/icones/facebook.png" alt="facebook"></a>
                        <a><img class="redesIcon" src="../image/icones/instagram.png" alt="instagram"></a>
                        <a><img class="redesIcon" src="../image/icones/twitter.png" alt="twitter"></a>
                    </div>
                </div>
            </div>
        </main>

        <!-- import php footer function -->
        <?php echo(footerMenu()); ?>
    </body>
</html>