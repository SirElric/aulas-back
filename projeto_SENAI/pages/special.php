<?php
    require_once('../functions/header.php');
    require_once('../functions/footer.php');
    require_once('../functions/cardProductSpecial.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Padoka Hill Valley
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/special.css">
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
                    <div class="productBox">
                        <!-- import php produtosMenu function  -->
                        <?php
                            echo(cardProduct());
                        ?>           
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