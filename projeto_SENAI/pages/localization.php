<?php
    require_once('../functions/header.php');
    require_once('../functions/footer.php');
    require_once('../functions/network.php');
    require_once('../functions/cardlocalization.php');
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
                        <?php
                            require_once('../db/connection.php');
                            $connect = connectionMySQL();
                            
                            $sql="
                                select * from tblLocation
                                where display = 1
                                order by idLocation asc;
                            ";

                            $selectLocal = mysqli_query($connect, $sql);

                            while($rsLocal = mysqli_fetch_assoc($selectLocal)){
                                ?>
                                    <div id="content-local">
                                        <div class="info">
                                            <div id="name" class="info-local"><?=$rsLocal['localName']?></div>
                                            <div id="state" class="info-local"><?=$rsLocal['state']?></div>
                                            <div id="city" class="info-local"><?=$rsLocal['city']?></div>
                                            <div id="street" class="info-local"><?=$rsLocal['street']?></div>
                                            <div id="number" class="info-local"><?=$rsLocal['localNumber']?></div>
                                            <div id="email" class="info-local"><?=$rsLocal['email']?></div>
                                        </div>
                                        <div class="map">
                                            <?=$rsLocal['map']?>
                                        </div>
                                    </div>  
                                <?php
                            }
                        ?>
                    
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