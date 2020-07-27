<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'view'){
            if(isset($_POST['id'])){
                //Import da biblioteca de conexão
                require_once('../db/connection.php');

                //Abre a conexão com o BD
                $connect = connectionMysql();

                $id = $_POST['id'];

                $sql = "select * from tblContact where tblContact.idContact = ".$id;

                $selectContact = mysqli_query($connect, $sql);

                if($rsContacts = mysqli_fetch_assoc($selectContact)){
                    $name = $rsContacts['clientName'];
                    $tellphone = $rsContacts['telephone'];
                    $cellphone = $rsContacts['cellphone'];
                    $profession = $rsContacts['profession'];
                    $email = $rsContacts['email'];
                    $homePage = $rsContacts['homePage'];
                    $facebook = $rsContacts['facebook'];
                    $message = $rsContacts['message'];
                    

                    if ($rsContacts['gender'] == 1) {
                        $gender = "Masculino";
                    }else{
                        $gender = "Feminino";
                    }

                    if ($rsContacts['optionMessage'] == 1) {
                        $optionMessage = "Critica: ";
                    }else{
                        $optionMessage = "Sugestão: ";
                    }
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
    <link rel="stylesheet" href="../css/showContact.css">
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
<div class="modal">
        <div class="title-showUser">
            <h1>Usuario</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="exit">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
            </svg>
        </div>
        <div class="informations">
            <div id="name" class="info">
                Nome:<br>
                <?=$name?>
            </div>
            <div id="profession" class="info">
                Profissão:<br>
                <?=$profession?>
            </div>
            <div id="gender" class="info">
                Genero:<br>
                <?=$gender?>
            </div>
            <div id="email" class="info">
                E-mail:<br>
                <?=$email?>
            </div>
            <div id="tellfone" class="info">
                Telefone:<br>
                <?=$tellphone?>
            </div>
            <div id="cellphone"class="info">
                Celular:<br>
                <?=$cellphone?>
            </div>
            <div id="facebook" class="info">
                Facebook:<br>
                <?=$facebook?>
            </div>
            <div id="homepage" class="info">
                HomePage:<br>
                <?=$homePage?>
            </div>
            <div id="message" class="info">
                <?=$optionMessage?>
                <?=$message?>
            </div>
        </div>
    </div>
</body>
</html>