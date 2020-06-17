<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'view'){
            if(isset($_POST['id'])){
                //Import da biblioteca de conexão
                require_once('connection.php');

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
                <td class="trtitle" colspan="2">
                    <h1 class="titleBlack">Contato</h1>
                    <div class="exit"></div>
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
                <td class="tdInfo">
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