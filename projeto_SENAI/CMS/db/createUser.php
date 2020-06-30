<?php

$action ="db/insertUser.php?modo=inserir";

require_once("connection.php");
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
        <form class="form">
            <input type="text" name="name" id="name" placeholder="NOME">
            <input type="text" name="surname" id="surname" placeholder="SOBRENOME">
            <input type="text" name="cpf" id="cpf" placeholder="CPF">
            <input type="text" name="password" id="password" placeholder="SENHA">
            <input type="text" name="birth" id="birth-date" placeholder="DATA NASCIMENTO">
            <input type="text" name="email" id="email" placeholder="E-MAIL">
            <input type="text" name="cellphone" id="cellphone" placeholder="CELULAR">
            <input type="text" name="tellphone" id="tellphone" placeholder="TELEFONE">
            <select name="permission" id="permission">
                <option value="" selected>PERMISSÂO</option>
                <option value="client">Cliente</option>
                <option value="operator">Operador</option>
                <option value="administer">Administrador</option>
            </select>
        </form>
        <div class="buttons">
            <button name="saveButton" class="button save" >SALVAR</button>
            <button name="exitButton" class="button exit" >Fechar</button>
        </div>
    </div>   
</body>
</html>