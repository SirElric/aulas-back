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
                <div class="page" onclick="">Localização</div>
           </div>
           <div class="admin-content">
                <div id="admin-curiosity">
                    <div class="title title-content">Curiosidade</div>
                    <div class="config-curiosity">
                        <form name="formCuriosity" id="form-curiosity" action="db/insertCuriosityDate.php?modo=submit" method="post" enctype="multipart/form-data">
                            <input type="text" name="titleCuriosity" id="title-curiosity" placeholder="Titulo">
                            <textarea name="textCuriosity" id="text-curiosity" placeholder="Curiosidades da empresa"></textarea>
                            <div class="buttons">
                                <button name="saveButton" id="button-save" class="button" >SALVAR</button>
                            </div>
                        </form>
                        <form name="formCuriosityImage" id="form-image-curiosity" action="db/uploadImage.php" method="post" enctype="multipart/form-data">
                            <label class="file-selector" for="image-curiosity">Escolha uma imagem &#187;</label>
                            <input type="file" name="imageCuriosity" id="image-curiosity" accept="image/jpeg, image/png">
                            <div id="image-box" class="image-box"></div>
                        </form>
                    </div>
                </div>

                <div id="admin-about">
                    <div class="title title-content">Sobre</div>
                    <form name="formabout" id="form-about" action="db/insertContent.php?modo=about" method="post">
                        <input type="text" name="titleabout" id="title-about" placeholder="Titulo">
                        <textarea name="textAbout" id="text-about" placeholder="Sobre a empresa"></textarea>
                        <div class="buttons">
                            <button name="saveButton" id="button-save" class="button" >SALVAR</button>
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </main>
    <footer>
        DESENVOLVIDO POR ERICK MATHEUS
    </footer>
</body>
</html>