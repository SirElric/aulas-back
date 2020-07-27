<?php
    require_once('functions/header.php');
    require_once('functions/footer.php');
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
        <link rel="stylesheet" type="text/css" href="css/localization.css">
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
                        <?php
                            require_once('db/connection.php');
                            $connect = connectionMySQL();
                            
                            $sql="
                                select * from tblLocation
                                where display = 1
                                order by idLocation asc;
                            ";

                            $selectLocal = mysqli_query($connect, $sql);

                            while($rsLocal = mysqli_fetch_assoc($selectLocal)){
                                ?>
                                    <div class="content-local">
                                        <div class="info">
                                            <div class="info-local name"><?=$rsLocal['localName']?></div>
                                            <div class="info-local state"><?=$rsLocal['state']?></div>
                                            <div class="info-local city"><?=$rsLocal['city']?></div>
                                            <div class="info-local street"><?=$rsLocal['street']?></div>
                                            <div class="info-local number"><?=$rsLocal['localNumber']?></div>
                                            <div class="info-local email"><?=$rsLocal['email']?></div>
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