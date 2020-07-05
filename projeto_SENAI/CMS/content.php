<?php
    require_once('functions/menu.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contentconfig.css">
    <script src="js/adminContent.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.form.js"></script>
    <script>
        $(document).ready(function(){
            $('#image-curiosity').live('change', function(){
                $('#form-image-curiosity').ajaxForm({
                    target:'#image-box'
                }).submit();
            });
        });
    </script>
    <title>CMS - Sistema de Gerenciamento do Site</title>
</head>
<body>
    <header>
        <h1 class="title">
            CMS - Sistema de Gerenciamento do Site.
        </h1>
        <img class="logo" src="img/bread.png" alt="logo">
    </header>
    <main>
        <?=(menu());?>
        <div class="title title-content">GERENCIAMENTO DE PAGINAS</div>
        <div class="content">
           <div class="options">
                <div class="page" onclick="openCuriosity()">Curiosidade</div>
                <div class="page" onclick="openAbout()">Sobre</div>
                <div class="page" onclick="openLocalization()">Localização</div>
           </div>
           <div class="admin-content">
                <div id="admin-curiosity">
                    <div class="title title-content">Config. Curiosidade</div>
                    <div class="config-curiosity">
                        <form name="formCuriosity" id="form-curiosity" action="db/insertCuriosityDate.php?modo=submit" method="post" enctype="multipart/form-data">
                            <input type="text" name="titleCuriosity" id="title-curiosity" placeholder="Titulo">
                            <textarea name="textCuriosity" id="text-curiosity" placeholder="Curiosidades da empresa"></textarea>
                            <div class="buttons">
                                <button name="saveCuriosity" id="save-curiosity" class="button" >SALVAR</button>
                            </div>
                        </form>
                        <form name="formCuriosityImage" id="form-image-curiosity" action="db/uploadImage.php" method="post" enctype="multipart/form-data">
                            <label class="file-selector" for="image-curiosity">Escolha uma imagem &#187;</label>
                            <input type="file" name="imageCuriosity" id="image-curiosity" accept="image/jpeg, image/png">
                            <div id="image-box" class="image-box"></div>
                        </form>
                    </div>
                    <div class="show-content">
                        <div class="title title-content">Curiosidades</div>
                        <table class="table">
                            <tr class="line-curiosity">
                                <td class="collumn">TITLE</td>
                                <td class="collumn">IMAGEM</td>
                                <td class="collumn">CURIOSIDADE</td>
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
                            <tr class="line-curiosity">
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div id="admin-about">
                    <div class="title title-content">Config. Sobre</div>
                    <form name="formabout" id="form-about" action="db/insertContent.php?modo=about" method="post">
                        <input type="text" name="titleabout" id="title-about" placeholder="Titulo">
                        <textarea name="textAbout" id="text-about" placeholder="Sobre a empresa"></textarea>
                        <div class="buttons">
                            <button name="saveAbout" id="save-about" class="button" >SALVAR</button>
                        </div>
                    </form>
                    <div class="show-content">
                        <div class="title title-content">Sobre</div>
                        <table class="table">
                            <tr class="line-aboult">
                                <td class="collumn">TITLE</td>
                                <td class="collumn">SOBRE</td>
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
                            <tr class="line-aboult">
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div id="admin-localization">
                    <div class="title title-content">Config. Localização</div>
                    <form name="formLocalization" id="form-local" action="db/insertContent.php?modo=local" method="post">
                        <input type="text" class="input-info" name="storeName" id="name" placeholder="Nome da Loja">
                        <input type="text" class="input-info" name="Email" id="email" placeholder="Email da Loja">
                        <input type="text" class="input-info" name="state" id="state" placeholder="Estado">
                        <input type="text" class="input-info" name="city" id="city" placeholder="Cidade">
                        <input type="text" class="input-info" name="street" id="street" placeholder="Rua">
                        <input type="text" class="input-info" name="number" id="number" placeholder="Numero">                        
                        <div class="buttons">
                            <button name="saveLocal" id="save-local" class="button" >SALVAR</button>
                        </div>
                    </form>
                    <div class="show-content">
                        <div class="title title-content">Localizações</div>
                        <table class="table">
                            <tr class="line-local">
                                <td class="collumn">NOME</td>
                                <td class="collumn">ESTADO</td>
                                <td class="collumn">EMAIL</td>
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
                            <tr class="line-local">
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                            </tr>
                        </table>
                    </div>
                </div>
           </div>
        </div>
    </main>
    <footer>
        DESENVOLVIDO POR ERICK MATHEUS
    </footer>
</body>
</html>