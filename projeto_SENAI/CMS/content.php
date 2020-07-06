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
    <div class="modal">
        <div class="show-modal"></div>
    </div>
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
                        <form name="formCuriosity" id="form-curiosity" action="db/insertContent.php?modo=submit" method="post" enctype="multipart/form-data">
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
                                <td class="collumn">CURIOSIDADE</td>
                                <td class="collumn">IMAGE</td>
                                <td class="collumn">
                                    
                                </td>
                            </tr>
                            <?php

                                require_once('db/connection.php');
                                $connect = connectionMySQL();                        

                                $sql="select * from tblCuriosity order by idCuriosity";

                                $selectCuriosity = mysqli_query($connect, $sql);
                                
                                while ($rsCuriosity = mysqli_fetch_assoc($selectCuriosity)){?>

                            <tr class="line-curiosity">
                                <td class="collumn"><?=$rsCuriosity['title']?></td>
                                <td class="collumn"><?=$rsCuriosity['textContent']?></td>
                                <td class="collumn">
                                    <img src="db/archives/<?=$rsCuriosity['image']?>" alt="image undefined" class="image">
                                </td>
                                <td class="collumn options-content">

                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-1 0 136 136.21852" class="view magnifying">
                                        <g id="surface1">
                                            <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 "/>
                                        </g>
                                    </svg>

                                    <a class="delete-link" onclick="return confirm('Deseja realmente excluir o registro?');
                                    " href="db/deleteDate.php?modo=deleteUser&id=<?=$rsUser['idUser']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="delete">
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                        </svg>
                                    </a>
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="view">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                    </svg>
                                </td>
                            </tr>

                                <?php
                                }
                            ?>
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
                    <form name="formabout" id="form-about" action="db/insertContent.php?modo=submit" method="post">
                        <input type="text" name="titleAbout" id="title-about" placeholder="Titulo">
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
                    <form name="formLocalization" id="form-local" action="db/insertContent.php?modo=submit" method="post">
                        <input type="text" class="input-info" name="storeName" id="name" placeholder="Nome da Loja">
                        <input type="text" class="input-info" name="email" id="email" placeholder="Email da Loja">
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
                                <td class="collumn"></td>
                            </tr>
                            <tr class="line-local">
                                <td class="collumn"></td>
                                <td class="collumn"></td>
                                <td class="collumn"></td>
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