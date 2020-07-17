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
                    $telephone = $rsContacts['telephone'];
                    $cellphone = $rsContacts['cellphone'];
                    $profession = $rsContacts['profession'];
                    $gender = $rsContacts['gender'];
                    $email = $rsContacts['email'];
                    $homePage = $rsContacts['homePage'];
                    $facebook = $rsContacts['facebook'];
                    $message = $rsContacts['message'];
                    $optionMessage = $rsContacts['optionMessage'];
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
                    $('#showContact').fadeOut(500);

                });
            });
    </script>
    <title>Show Contact</title>
</head>
<body>
    <div>
        <table class="tblInfo">
            <tr class="trtitle">
                <td class="tdInfo" colspan="2">
                    <h1 class="title">Contato</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="exit">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                    </svg>
                </td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Nome:</td>
                <td class="tdInfo"><?=$name?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Telefone</td>
                <td class="tdInfo"><?=$telephone?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Celular:</td>
                <td class="tdInfo"><?=$cellphone?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Profession:</td>
                <td class="tdInfo"><?=$profession?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Gênero:</td>
                <td class="tdInfo">
                    <?php 
                        if($gender == '0'){
                            echo('Feminino');
                        }else{
                            echo('Masculino');
                        } 
                    ?>
                </td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">E-mail:</td>
                <td class="tdInfo"><?=$email?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">HomePage:</td>
                <td class="tdInfo"><?=$homePage?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">FaceBook:</td>
                <td class="tdInfo"><?=$facebook?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">
                    <?php 
                        if($optionMessage == '0'){
                            echo('Sugestão');
                        }else{
                            echo('Critica');
                        } 
                    ?>
                </td>
                <td class="tdInfo">
                    <div class="divInfo">
                        <?=$message?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>