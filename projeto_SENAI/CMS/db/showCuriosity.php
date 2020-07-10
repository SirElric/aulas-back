<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'view'){
            if(isset($_POST['id'])){
                //Import da biblioteca de conexão
                require_once('connection.php');

                //Abre a conexão com o BD
                $connect = connectionMySQL();

                $id = $_POST['id'];

                $sql = "select * from tblCuriosity
                        where tblCuriosity.idCuriosity = ".$id;

                
                $selectCuriosity = mysqli_query($connect, $sql);

                if($rsCuriosity = mysqli_fetch_assoc($selectCuriosity)){
                    $title = $rsCuriosity['title'];
                    $text = $rsCuriosity['textContent'];
                    $image = $rsCuriosity['image'];
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
    <link rel="stylesheet" href="../css/showCuriosity.css">
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function(){
                $('.exit').click(function(){
                    $('#modal').fadeOut(500);

                });
            });
    </script>
    <title>Show Contact</title>
</head>
<body>
    <div class='curiosity-box'>
        <div id="header-modal">
            <h1>Demo. Curiosidades</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="exit">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
            </svg>
        </div>
        <div id="content-curiosity-modal">
            <div id="info-curiosity-modal">
                <h3 id="title-curiosity-modal" class="title"><?=$title?></h3>
                <p id="text-curiosity-modal"><?=$text?></p>
            </div>
            <img id="image-curiosity-modal" src="db/archives/<?=$image?>" alt="<?=$image?>">
        </div>  
    </div>
</body>
</html>