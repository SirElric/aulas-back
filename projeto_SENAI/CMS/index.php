<?php
    $action ="insertUser.php?modo=inserir";

    require_once("db/connection.php");
    $connect = connectionMySQL();

    $constraint = $_GET['constraint'];
    $nameLevel = explode("_",$constraint);

    $username = explode("-", $nameLevel[1]);
                                    
    $name= $username[0]." ".$username[1];
    $level= $nameLevel[0];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CMS - Sistema de Gerenciamento do Site</title>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('.button-newuser').click(function(){
                $('#modal').fadeIn(500);
            });
            $('.edit').click(function(){
                $('#modal').fadeIn(500);
            });
        });

        function newUser(){
            $.ajax({
                type: "POST",
                url: "functions/createUser.php",
                success: function (dados){
                    $('#newUser').html(dados);
                }
            });
        }
        function editUser(idUser){
            $.ajax({
                type: "POST",
                url: "functions/editUser.php",
                data: {modo:'edit', id:idUser},
                success: function (dados){
                    $('#newUser').html(dados);
                }
            });
        }
    </script>
</head>
<body>
    <header>
        <h1 class="title-cms">
            CMS - Sistema de Gerenciamento do Site.
        </h1>
        <img class="logo" src="img/bread.png" alt="logo">
    </header>
    <main>
        <div class="menu-home">
            <?php require_once('functions/menuMain.php')?>
            <h1 id="welcome">Bem Vindo, <?=$name?>.</h1>
            <a id="logOff" href="../Padoka Hill Valley/index.php">Sair</a>
        </div>
        <div class="content">
            
        </div>
    </main>
    <footer>
        DESENVOLVIDO POR ERICK MATHEUS
    </footer>
</body>
</html>