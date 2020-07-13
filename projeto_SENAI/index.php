
<?php
    require_once('functions/header.php');
    require_once('functions/footer.php');
    require_once('functions/cardProductHome.php');
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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <script src="js/slide.js"></script>
        
        
        <link rel="shortcut icon" href="image/icones/bread.png">
    </head>
    <body onload="startImage()">

        <!-- import php header -->            
        <?php echo(headerMenuHome()); ?>

        <main>
            <div id="mainBox">
                <div id="contentBox">
                    <!--Slide local-->
                    <div id="carousel-box">
        
                        <div id="carousel-slide">
                        <div id='next' class="slide-control" onclick="next()">&raquo;</div>
                        <div id='prev' class="slide-control" onclick="prev()">&laquo;</div>
                        </div>
                        
                    </div>
                    <div id="container">
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
                        <div id="itensBox">
                            <div class="itens">
                                <!-- import php prudutos function -->
                                <?php
                                    echo(cardProduct());
                                    echo(cardProduct()); 
                                    echo(cardProduct()); 
                                    echo(cardProduct()); 
                                    echo(cardProduct()); 
                                    echo(cardProduct()); 
                                              
                                ?>                          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="emptyBox">
                    <?php echo(socialNetworkHome()); ?>    
                </div>
            </div>
        </main>

        <!-- import php footer function -->
        <?php echo(footerMenuHome()); ?>
    </body>
</html>