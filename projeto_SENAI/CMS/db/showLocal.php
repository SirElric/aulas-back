<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'view'){
            if(isset($_POST['id'])){
                //Import da biblioteca de conexão
                require_once('connection.php');

                //Abre a conexão com o BD
                $connect = connectionMySQL();

                $id = $_POST['id'];

                $sql = "select * from tblLocation
                        where tblLocation.idLocation = ".$id;

                
                $selectLocal = mysqli_query($connect, $sql);

                if($rsLocal = mysqli_fetch_assoc($selectLocal)){
                    $name = $rsLocal['localName'];
                    $email = $rsLocal['email'];
                    $state =$rsLocal['state'];
                    $city =$rsLocal['city'];
                    $street =$rsLocal['street'];
                    $number =$rsLocal['localNumber'];
                    $map =$rsLocal['map'];
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/showLocal.css">
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function(){
                $('.exit').click(function(){
                    $('#modal').fadeOut(500);

                });
            });
    </script>
    <title>Show Local</title>
</head>
<body>
    <div class='local-box'>
        <div id="header-modal">
            <h1>Demo. Local</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="exit">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
            </svg>
        </div>
        <div id="content-local-modal">
            <div class="info-modal">
                <div id="name" class="info-local"><?=$name?></div>
                <div id="state" class="info-local"><?=$state?></div>
                <div id="city" class="info-local"><?=$city?></div>
                <div id="street" class="info-local"><?=$street?></div>
                <div id="number" class="info-local"><?=$number?></div>
                <div id="email" class="info-local"><?=$email?></div>
            </div>
            <div class="map-modal">
                <?=$map?>
            </div>
        </div>  
    </div>
</body>
</html>