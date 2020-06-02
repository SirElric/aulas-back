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
        <link rel="stylesheet" type="text/css" href="../css/about.css">
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
                    <div id="aboutBox">
                        <div class="textBox">
                            <h1 class="title">Padoka Hill Valley</h1>
                            <p class="about">
                                Deserunt qui non id elit amet cupidatat mollit minim adipisicing
                                consequat veniam ea consectetur. Officia fugiat cillum cillum aute
                                pariatur consectetur laboris ullamco consectetur sunt. Dolor ex
                                dolore officia proident sunt consectetur laborum ullamco. Est 
                                dolor elit ea nulla laboris cillum et adipisicing Lorem culpa 
                                ad commodo. Cillum aute ex culpa magna ad enim velit nisi.

                                Ex officia labore consequat ut deserunt elit do laborum consectetur
                                nisi nisi ipsum laborum.Lorem sunt excepteur anim reprehenderit cupidatat
                                quis laborum do in et in velit. Veniam veniam minim culpa 
                                sunt dolore est consectetur voluptate aliqua eu. Adipisicing
                                laboris proident amet tempor deserunt ex amet laboris do non
                                Lorem adipisicing. Enim labore nisi dolor ut culpa ipsum.

                                Fugiat amet minim cillum fugiat culpa. Laborum occaecat in ipsum 
                                irure ea reprehenderit aliqua minim veniam consectetur exercitation 
                                reprehenderit sint. Adipisicing veniam reprehenderit elit ex aute sit 
                                amet laborum voluptate laboris velit. Ut quis occaecat nostrud commodo 
                                deserunt commodo deserunt. Quis nisi ut consequat ex veniam esse duis 
                                proident esse officia. Non minim incididunt eu duis aliquip magna officia 
                                magna cupidatat. Ex ullamco veniam occaecat reprehenderit laboris.
                            </p>
                        </div>
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