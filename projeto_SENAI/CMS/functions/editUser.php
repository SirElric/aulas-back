<?php

require_once("../db/connection.php");
$connect = connectionMySQL();

$constraint=$_POST['constraint'];

if (isset($_POST['modo'])) {

    if ($_POST['modo'] == 'edit') {

        if (isset($_POST['id'])) {

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

                $action = "db/updateUser.php?modo=update&constraint=".$constraint."&id=".$rsListUser['idUser'];
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
    <link rel="stylesheet" href="../css/createUser.css">
    <script>
        const masks = {
            text : value => value.replace(/[^a-zA-Z Á-ÿ]/,''),
            cellphone : value => value.replace(/\D/g,'')
                                    .replace(/(\d{3})(\d)/,'($1) $2')
                                    .replace(/(\d{5})(\d)/,'$1-$2')
                                    .replace(/(.{16})(.*)/,'$1'),

            tellphone : value => value.replace(/\D/g,'')
                                    .replace(/(\d{3})(\d)/,'($1) $2')
                                    .replace(/(\d{4})(\d)/,'$1-$2')
                                    .replace(/(.{15})(.*)/,'$1'),

            cpf       : value => value.replace(/\D/g,'')
                                    .replace(/(\d{3})(\d)/,'$1.$2')
                                    .replace(/(\d{3})(\d)/,'$1.$2')
                                    .replace(/(\d{3})(\d)/,'$1-$2')
                                    .replace(/(.{14})(.*)/,'$1'),

            birth       : value => value.replace(/\D/g,'')
                                    .replace(/(\d{2})(\d)/,'$1/$2')
                                    .replace(/(\d{2})(\d)/,'$1/$2')
                                    .replace(/(\d{4})(\d)/,'$1/$2')
                                    .replace(/(.{10})(.*)/,'$1'),

        };

        const validar = element => {
            element.addEventListener( 'input', (event) => {
                const $input = event.target;
                const typeMask = $input.dataset.type;
                if (masks.hasOwnProperty(typeMask)){
                    $input.value = masks[typeMask]($input.value);   
                }
            });
        };

        validar (document.getElementById('formEdit'));
    </script>
    <script src="../js/jquery.js"></script>
    <script>        
        $(document).ready(function(){
                $('.exit').click(function(){
                    $('#modal').fadeOut(500);

                });
            });
    
    </script>
    <title>Create User</title>
</head>
<body>
    <div class="modal">
    <div class="title-newuser">
            Edição de usuario
            <span onclick="exit()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="exit" id="exit">
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </span>
        </div>
        <form class="form-edit" id="formEdit" name="formNewUser" method="post" action="<?=$action?>">
            <input type="text" name="nick" id="nick" placeholder="APELIDO ATUAL">
            <input type="text" name="password" id="password" placeholder="SENHA ATUAL">
            <input type="text" name="name" id="name" data-type="text" placeholder="NOME" value="<?=$name?>">
            <input type="text" name="surname" id="surname" data-type="text" placeholder="SOBRENOME" value="<?=$surname?>">
            <input type="text" name="email" id="email" placeholder="E-MAIL" value="<?=$email?>">
            <input type="text" name="cpf" id="cpf" data-type="cpf" placeholder="CPF" value="<?=$cpf?>">
            <input type="text" name="newnick" id="newnick" placeholder="NOVO APELIDO">
            <input type="text" name="newpassword" id="newpassword" placeholder="NOVA SENHA">
            <input type="text" name="birth" id="birth-date" data-type="birth" placeholder="DATA NASCIMENTO" value="<?=$birthBR?>">
            <input type="text" name="cellphone" id="cellphone" data-type="cellphone" placeholder="CELULAR" value="<?=$cellphone?>">
            <input type="text" name="tellphone" id="tellphone" data-type="tellphone" placeholder="TELEFONE" value="<?=$tellphone?>">
            <select name="permission" id="permission">
                <?php

                    if(isset($_POST['modo']))
                    {
                        if($_POST['modo']=='edit')
                        {
                            ?>
                                <option value="<?=$idConstraint?>" selected><?=$level?></option>
                            <?php
                        }
                    }else{
                        ?>
                            <option value="" selected> Selecione um item </option>
                        <?php
                    }
                    
                    $sql = "select * from tblConstraint
                            order by idConstraint";

                    $selectLevel = mysqli_query($connect, $sql);

                    while($rsLevel = mysqli_fetch_assoc($selectLevel)){

                ?>
                    <option value="<?=$rsLevel['idConstraint']?>"><?=$rsLevel['levelName']?></option>
                <?php
                    }
                ?>
            </select>
            <div id="buttons" class="buttons">
                <button name="saveButton" id="button-save" class="button save" >SALVAR</button>
            </div>
        </form>
    </div>   
</body>
</html>