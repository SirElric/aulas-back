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
    <link rel="stylesheet" href="css/showCuriosity.css">
    <script src="js/adminContent.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.form.js"></script>
    <script>
        $(document).ready(function(){
            $('.view').click(function(){
                $('#modal').fadeIn(500);
            });

            $('#image-curiosity').live('change', function(){
                $('#form-image-curiosity').ajaxForm({
                    target:'#image-box'
                }).submit();
            });
        });
        function showCuriosity(idCuriosity){
            $.ajax({
                type: "POST",
                url: "db/showCuriosity.php",
                data: {modo:'view', id:idCuriosity},
                success: function (dados){
                    $('#show-curiosity').html(dados);
                }
            });
        }
        function showAbout(idAbout){
            $.ajax({
                type: "POST",
                url: "db/showAbout.php",
                data: {modo:'view', id:idAbout},
                success: function (dados){
                    $('#show-about').html(dados);
                }
            });
        }
    </script>
    <title>CMS - Sistema de Gerenciamento do Site</title>
</head>
<body>
    <div id="modal">
        <div id="show-curiosity"></div>
        <div id="show-about"></div>
        <div id="show-local"></div>
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
                                <td class="collumn"></td>
                            </tr>
                            <?php

                                require_once('db/connection.php');
                                $connect = connectionMySQL();                        

                                $sql="select * from tblCuriosity order by idCuriosity";

                                $selectCuriosity = mysqli_query($connect, $sql);
                                
                                while ($rsCuriosity = mysqli_fetch_assoc($selectCuriosity)){?>

                            <tr class="line-curiosity">
                                <td class="collumn-content collumn-title"><?=$rsCuriosity['title']?></td>
                                <td class="collumn-content collumn-text"><?=$rsCuriosity['textContent']?></td>
                                <td class="collumn-content collumn-image">
                                    <img src="db/archives/<?=$rsCuriosity['image']?>" alt="image undefined" class="image">
                                </td>
                                <td class="collumn-content collumn-option">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="view option-icon" id="view-curiosity" onclick="showCuriosity(<?=$rsCuriosity['idCuriosity']?>);"version="1.1" viewBox="-1 0 136 136.21852">
                                        <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 "/>
                                    </svg>

                                    <a class="delete-link" onclick="return confirm('Deseja realmente excluir o registro?');
                                    " href="db/deleteDate.php?modo=deleteCuriosity&id=<?=$rsCuriosity['idCuriosity']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="delete option-icon">
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                        </svg>
                                    </a>
                                    
                                    <a class="delete-link" href="db/displayUpdate.php?modo=displayCuriosity&id=<?=$rsCuriosity['idCuriosity']?>">
                                        <?php
                                            if($rsCuriosity['display'] == true){
                                                echo("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='use option-icon'> 
                                                            <path d='M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z'/>
                                                        </svg>");
                                            }
                                            else{
                                               echo("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='use option-icon'>
                                                        <path d='M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z'/>
                                                    </svg>");
                                            }
                                        ?>                                        
                                    </a>
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
                            <tr class="line-about">
                                <td class="collumn">TITLE</td>
                                <td class="collumn">SOBRE</td>
                                <td class="collumn"></td>
                            </tr>
                            <?php

                                require_once('db/connection.php');
                                $connect = connectionMySQL();                        

                                $sql="select * from tblAbout order by idAbout";

                                $selectAbout = mysqli_query($connect, $sql);
                                
                                while ($rsAbout = mysqli_fetch_assoc($selectAbout)){?>

                            <tr class="line-about">
                                <td class="collumn-content collumn-title"><?=$rsAbout['title']?></td>
                                <td class="collumn-content collumn-text"><?=$rsAbout['textContent']?></td>
                                <td class="collumn-content collumn-option">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="view option-icon" id="view-about" onclick="showAbout(<?=$rsAbout['idAbout']?>);"version="1.1" viewBox="-1 0 136 136.21852">
                                        <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 "/>
                                    </svg>

                                    <a class="delete-link" onclick="return confirm('Deseja realmente excluir o registro?');
                                        " href="db/deleteDate.php?modo=deleteAbout&id=<?=$rsAbout['idAbout']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="delete option-icon">
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                        </svg>
                                    </a>
                                    
                                    <a class="delete-link" href="db/displayUpdate.php?modo=displayAbout&id=<?=$rsAbout['idAbout']?>">
                                        <?php
                                            if($rsAbout['display'] == true){
                                                echo("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='use option-icon'> 
                                                            <path d='M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z'/>
                                                        </svg>");
                                            }
                                            else{
                                               echo("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='use option-icon'>
                                                        <path d='M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z'/>
                                                    </svg>");
                                            }
                                        ?>                                        
                                    </a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            <tr class="line-about">
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
                                <td class="collumn">EMAIL</td>
                                <td class="collumn"></td>
                            </tr>
                            <?php

                                require_once('db/connection.php');
                                $connect = connectionMySQL();                        

                                $sql="select * from tblLocation order by idLocation";

                                $selectLocal = mysqli_query($connect, $sql);
                                
                                while ($rsLocal = mysqli_fetch_assoc($selectLocal)){?>

                            <tr class="line-local">
                                <td class="collumn"><?=$rsLocal['localName']?></td>
                                <td class="collumn"><?=$rsLocal['email']?></td>
                                <td class="collumn">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="view view-horizontal option-icon" onclick="showContact(<?=$rsLocal['idLocation']?>);"version="1.1" viewBox="-1 0 136 136.21852">
                                        <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 "/>
                                    </svg>

                                    <a class="delete-link" onclick="return confirm('Deseja realmente excluir o registro?');
                                    " href="db/deleteDate.php?modo=deleteUser&id=<?=$rsUser['idUser']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="delete option-icon">
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                        </svg>
                                    </a>
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="use option-icon"> 
                                        <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                    </svg>
                                </td>
                            </tr>

                                <?php
                                }
                            ?>
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