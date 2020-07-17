<?php

require_once("../db/connection.php");
$connect = connectionMySQL();

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
    <link rel="stylesheet" href="../css/createUser.css">
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
        </div>
        <form class="form-edit" name="formNewUser" method="post" action="<?=$action?>">
            <input type="text" name="name" id="name" placeholder="NOME" value="<?=$name?>">
            <input type="text" name="surname" id="surname" placeholder="SOBRENOME" value="<?=$surname?>">
            <input type="text" name="email" id="email" placeholder="E-MAIL" value="<?=$email?>">
            <input type="text" name="cpf" id="cpf" placeholder="CPF" value="<?=$cpf?>">
            <input type="text" name="password" id="password" placeholder="SENHA ATUAL">
            <input type="text" name="newpassword" id="newpassword" placeholder="NOVA SENHA">
            <input type="text" name="birth" id="birth-date" placeholder="DATA NASCIMENTO" value="<?=$birthBR?>">
            <input type="text" name="cellphone" id="cellphone" placeholder="CELULAR" value="<?=$cellphone?>">
            <input type="text" name="tellphone" id="tellphone" placeholder="TELEFONE" value="<?=$tellphone?>">
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
                <button name="exitButton" id="button-exit" class="button exit" >FECHAR</button>
            </div>
        </form>
    </div>   
</body>
</html>