<?php
    require_once('functions/header.php');
    require_once('functions/footer.php');
    require_once('functions/cardProductSpecial.php');
    require_once('functions/network.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
            Padoka Hill Valley
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/special.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="image/icones/bread.png">
    </head>
    <body>

        <!-- import php header -->            
        <?php echo(headerSite()); ?>

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
                    <?php echo(socialNetwork()); ?>
                </div>
            </div>
        </main>

        <!-- import php footer function -->
        <?php echo(footerMenu()); ?>
    </body>
</html>