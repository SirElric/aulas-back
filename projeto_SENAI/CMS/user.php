<?php
    require_once('functions/menu.php');

    $action ="insertUser.php?modo=inserir";

    require_once("db/connection.php");
    $connect = connectionMySQL();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/createUser.css">
    <title>CMS - Sistema de Gerenciamento do Site</title>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('.button-newuser').click(function(){
                $('#modal').fadeIn(500);
            });
        });

        function newUser(){
            $.ajax({
                type: "POST",
                url: "db/createUser.php",
                success: function (dados){
                    $('#newUser').html(dados);
                }
            });
        }
    </script>
</head>
<body>
    <div id="modal">
        <div id="newUser">

        </div>
    </div>
    <header>
        <h1 class="title-cms">
            CMS - Sistema de Gerenciamento do Site.
        </h1>
        <img class="logo" src="img/bread.png" alt="logo">
    </header>
    <main>

        <?php echo(menu());?>

        <div class="content">
            <div class="title title-content">GERENCIAMENTO DE USUARIOS</div>
            <div class="subtitle-box">
                <h2 class="subtitle">USUARIO</h2>
                <button class="button-newuser" onclick="newUser();">Novo Usuario</button>
            </div>
            <div class="types">
                <div class="type-info">NOME</div>
                <div class="type-info">PERMISSÃO</div>
                <div class="type-info">E-MAIL</div>
                <div class="type-info">OPÇÕES</div>
            </div>
            <div class="overflow">
                <table class="table-register">
                <?php
                    
                    //Script para selecionar todos os registros
                    $sql = "
                            SELECT tblUser.idUser, tblUser.userName, tblUser.email,
                            tblConstraint.levelName as level
                            FROM tblUser, tblConstraint
                            WHERE tblConstraint.idConstraint = tblUser.idConstraint
                            order by tblUser.idUser desc;
  
                    ";
                    
                    //Envia o script para o BD.
                    $selectUsers = mysqli_query($connect, $sql);
                
                    //Estrtutura de repetição para listar os contatos na lista, utilizamos a função mysqli_fetch_assoc() para transformar o resultado do BD em um ArratList.
                    while ($rsUser = mysqli_fetch_assoc($selectUsers))
                    {

                        ?>
                        <tr class="line">
                            <td class="collumn"><?=$rsUser['userName']?></td>
                            <td class="collumn"><?=$rsUser['level']?></td>
                            <td class="collumn"><?=$rsUser['email']?></td>
                            <td class="collumn">
                                <a onclick="return confirm('Deseja realmente excluir o registro?');
                                " href="db/deleteDate.php?modo=deleteUser&id=<?=$rsUser['idUser']?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="delete">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                    </svg>
                                </a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="view" onclick="showContact(<?=$rsContacts['idContact']?>);">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                    <tr class="line">
                        <td class="collumn"></td>
                        <td class="collumn"></td>
                        <td class="collumn"></td>
                        <td class="collumn"></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <footer>
        DESENVOLVIDO POR ERICK MATHEUS
    </footer>
</body>
</html>