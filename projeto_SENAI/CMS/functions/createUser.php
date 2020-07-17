<?php

$action ="db/insertUser.php?modo=inserir";

require_once("../db/connection.php");
$connect = connectionMySQL();

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
            Cadastro novo usuario
        </div>
        <form class="form-create" name="formNewUser" method="post" action="<?=$action?>">
            <input type="text" name="name" id="name" placeholder="NOME">
            <input type="text" name="surname" id="surname" placeholder="SOBRENOME">
            <input type="text" name="email" id="email" placeholder="E-MAIL">
            <input type="text" name="cpf" id="cpf" placeholder="CPF">
            <input type="text" name="password" id="password" placeholder="SENHA">
            <input type="text" name="birth" id="birth-date" placeholder="DATA NASCIMENTO" required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}">
            <input type="text" name="cellphone" id="cellphone" placeholder="CELULAR">
            <input type="text" name="tellphone" id="tellphone" placeholder="TELEFONE">
            <select name="permission" id="permission">
                <option value="" selected> Selecione um item </option>
                <?php                               
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