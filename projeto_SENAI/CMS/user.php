<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <title>CMS - Sistema de Gerenciamento do Site</title>
</head>
<body>
    <div class="modal">
        <div class="newUser">

        </div>
    </div>
    <header>
        <h1 class="title">
            CMS - Sistema de Gerenciamento do Site.
        </h1>
        <img class="logo" src="img/bread.png" alt="logo">
    </header>
    <main>
        <nav class="menu">
            <div class="option">
                <a href="index.php">
                    <img src="img/admin.png" alt="Adm. Conteudo" class="iconOption">
                    <h1 class="titleOption">Adm. Conteudo</h1>
                </a>
            </div>
            <div class="option">
                <a href="contact.php">
                    <img src="img/contact.png" alt="Adm. FaleConosco" class="iconOption">
                    <h1 class="titleOption">Adm. Fale Conosco</h1>
                </a>
            </div>
            <div class="option">
                <a href="">
                    <img src="img/user.png" alt="Adm. Usuarios" class="iconOption">
                    <h1 class="titleOption">Adm. Usuarios</h1>
                </a>
            </div>
        </nav>
        <div class="content">
            <div class="title">GERENCIAMENTO DE USUARIOS</div>
            <div class="subtitle">
                <h2 class="user">USUARIO</h2>
                <button class="btnNewUser">Novo Usuario</button>
            </div>
            <table class="register">
                <tr class="line">
                    <td class="collumn">NOME</td>
                    <td class="collumn">CELULAR</td>
                    <td class="collumn">PERMISSÃO</td>
                </tr>
                <tr class="line">
                    <td class="collumn"></td>
                    <td class="collumn"></td>
                    <td class="collumn"></td>
                </tr>
                <tr class="line">
                    <td class="collumn"></td>
                    <td class="collumn"></td>
                    <td class="collumn"></td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <h1 class="subTitle">
            DESENVOLVIDO POR ERICK MATHEUS
        </h2>
    </footer>
</body>
</html>