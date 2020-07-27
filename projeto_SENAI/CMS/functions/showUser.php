<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'view'){
            if(isset($_POST['id'])){
                require_once('../db/connection.php');
                $connect = connectionMysql();

                $id = $_POST['id'];

                $sql = "
                select tblUser.*, tblConstraint.levelName as level
                from tblUser, tblConstraint
                where tblConstraint.idConstraint = tblUser.idConstraint 
                and tblUser.idUser =". $id;

                $selectDates = mysqli_query($connect, $sql);

                if ($rsListUser = mysqli_fetch_assoc($selectDates)) {

                    $username = explode("-", $rsListUser['username']);

                    $name = $username[0];
                    $surname = $username[1];
                    $email = $rsListUser['email'];
                    $cpf = $rsListUser['cpf'];
                    $password = $rsListUser['userpassword'];
                    
                    $cellphone = $rsListUser['cellphone'];
                    $tellphone = $rsListUser['tellphone'];

                    $idConstraint = $rsListUser['idConstraint'];
                    $level = $rsListUser['level'];

                    $birthEUA = explode("-", $rsListUser['birthDate']);
                    $birthBR = $birthEUA[2]."/".$birthEUA[1]."/".$birthEUA[0];

                    $action = "db/updateUser.php?modo=update&id=".$rsListUser['idUser'];
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
    <link rel="stylesheet" href="../css/showUser.css">
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function(){
                $('.exit').click(function(){
                    $('#modal').fadeOut(500);

                });
            });
    </script>
    <title>Show-User</title>
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
                Nome:
                <?=$name." ".$surname?>
            </div>
            <div id="birth" class="info">
                Data Nascimento:
                <?=$birthBR?>
            </div>
            <div id="email" class="info">
                E-mail:
                <?=$email?>
            </div>
            <div id="cpf" class="info">
                CPF:
                <?=$cpf?>
            </div>
            <div id="tellfone" class="info">
                Telefone:
                <?=$tellphone?>
            </div>
            <div id="cellphone"class="info">
                Celular:
                <?=$cellphone?>
            </div>
            <div id="permission" class="info">
                Permissão:
                <?=$level?>
            </div>
        </div>
    </div>
</body>
</html>