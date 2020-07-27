<?php

$constraint=$_POST['constraint'];

$action ="db/insertUser.php?modo=inserir&constraint=".$constraint;

require_once("../db/connection.php");
$connect = connectionMySQL();

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

        validar (document.getElementById('form-create'));

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
<body >
    <div class="modal">
        <div class="title-newuser">
            Cadastro novo usuario
            <span onclick="exit()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="exit" id="exit">
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </span>
        </div>
        <form class="form-create" id="form-create" name="formNewUser" method="post" action="<?=$action?>">
            <input type="text" name="name" id="name" data-type="text" placeholder="NOME">
            <input type="text" name="surname" id="surname" data-type="text" placeholder="SOBRENOME">
            <input type="text" name="email" id="email" placeholder="E-MAIL">
            <input type="text" name="cpf" id="cpf" data-type="cpf" placeholder="CPF">
            <input type="text" name="nick" id="nick" placeholder="APELIDO">
            <input type="text" name="password" id="password" placeholder="SENHA">
            <input type="text" name="birth" id="birth-date" data-type="birth" placeholder="DATA NASCIMENTO">
            <input type="text" name="cellphone" id="cellphone" data-type="cellphone" placeholder="CELULAR">
            <input type="text" name="tellphone" id="tellphone" data-type="tellphone" placeholder="TELEFONE">
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
            </div>
        </form>
    </div>   
</body>
</html>