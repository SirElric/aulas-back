<?php
    require_once('functions/header.php');
    require_once('functions/footer.php');
    require_once('functions/cardProductSale.php');
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
        <link rel="stylesheet" type="text/css" href="css/sale.css">
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
                    
                    <div id="menuItemBox">
                        <div class="menuItem ">
                            <!-- import php produtosMenu function  -->
                            <?php
                                echo(menuProduct());
                                echo(menuProduct());
                                echo(menuProduct());
                                echo(menuProduct());
                                echo(menuProduct());
                                echo(menuProduct());
                                echo(menuProduct());
                                echo(menuProduct());
                                echo(menuProduct());
                            ?>
                        </div>
                    </div>
                    <div class="productBox">
                        <h1>Promoções de hoje:</h1>
                        <!-- import php produtosMenu function  -->
                        <?php
                            echo(cardProduct());
                            echo(cardProduct());
                            echo(cardProduct());
                            echo(cardProduct());
                            echo(cardProduct());
                            echo(cardProduct());
                            echo(cardProduct());
                            echo(cardProduct());
                            echo(cardProduct());
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