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
    <main class="main-modal">
        <div class="line-title">
            <div class="collumn-title">
                <h1 class="title">Contato</h1>
            </div>
            <div class="collumn-exit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="exit">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </div>
        </div>
        <form name="new" action="<?=($action);?>" method="post">
            <table class="table-form">
                <tr class="line-type">
                    <td class="type">NOME:</td>
                    <td class="input">
                        <input type="text" name="name" id="name" placeholder="Insira um nome">
                    </td>
                </tr>
                <tr class="line-type">
                    <td class="type">DATA NASCIMENTO:</td>
                    <td class="input">
                    <input type="text" name="birth" id="birth-date" placeholder="Insira a data de nascimento">
                    </td>
                </tr>
                <tr class="line-type">
                    <td class="type">E-MAIL:</td>
                    <td class="input">
                        <input type="email" name="email" id="email" placeholder="Insira um e-mail">
                    </td>
                </tr>
                <tr class="line-type">
                    <td class="type">CELULAR:</td>
                    <td class="input">
                        <input type="text" name="cellphone" id="cellphone" placeholder="Insira um numero de celular">
                    </td>
                </tr>
                <tr class="line-type">
                    <td class="type">TELEFONE:</td>
                    <td class="input">
                        <input type="text" name="tellphone" id="tellphone" placeholder="Insira um numero de telefone">
                    </td>
                </tr>
                <tr class="line-type">
                    <td class="type">PERMISSÃO:</td>
                    <td class="input">
                        <select name="permission" id="permission">
                            <option value="" selected>Defina uma permissão</option>
                            <option value="client">Cliente</option>
                            <option value="operator">Operador</option>
                            <option value="administer">Administrador</option>
                        </select>
                    </td>
                </tr>
                <tr class="line-type">
                    <td class="input-button" colspan="2">
                        <button name="saveBtn" class="save-button" value="save">SALVAR</button>
                    </td>
                </tr>
            </table>
        </form>
    </main>
    
</body>
</html>