<?php
    require_once('../db/connection.php');

    $connect = connectionMysql()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>CMS - Sistema de Gerenciamento do Site</title>
</head>
<body>
    <div id="showContact">
        <div id="showContactContent"></div>
    </div>
    <header>
        <h1 class="subTitle">
            <span class="title">
                CMS
            </span>
            - Sistema de Gerenciamento do Site.
        </h1>
        <img class="logo" src="img/bread.png" alt="logo">
    </header>
    <main>
        <nav>
            <div class="menu">
                <div class="option">
                    <a href="">
                        <img src="img/admin.png" alt="Adm. Conteudo" class="iconOption">
                        <h1 class="titleOption">Adm. Conteudo</h1>
                    </a>
                </div>
                <div class="option">
                    <a>
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
            </div>
            <div class="logout">
                <h1 class="message">Bem Vindo, XXXXXXXXX</h1>
                <input class="btnLogout" type="submit" value="Logout">
            </div>
        </nav>
        <div class="content">
            <div id="boxTitulo" colspan="5">
                <h1> Consulta de Dados.</h1>
            </div>
            <div id="consultaDeDados">     
                <table id="tblConsulta" >
                    <tr id="tblLinhas">
                        <td class="tblColunas"> Nome </td>
                        <td class="tblColunas"> Celular </td>
                        <td class="tblColunas"> e-mail </td>
                        <td class="tblColunas">  </td>
                    </tr>
                        
                    <?php
                            
                        //Script para selecionar todos os registros
                        $sql = "
                        select tblContact.idContact, tblContact.clientname, tblContact.cellphone, tblContact.email
                        FROM tblcontact
                        order by tblContact.idContact desc; 
                        ";
                            
                        //Envia o script para o BD.
                        $selectContatos = mysqli_query($connect, $sql);
                        
                        //Estrtutura de repetição para listar os contatos na lista, utilizamos a função mysqli_fetch_assoc() para transformar o resultado do BD em um ArratList.
                        while ($rsContatos = mysqli_fetch_assoc($selectContatos))
                        {
                                
                            ?>
                            <tr id="tblLinhas">
                                <td class="tblColunas"><?=$rsContatos['clientname']?></td>
                                <td class="tblColunas"><?=$rsContatos['cellphone']?></td>
                                <td class="tblColunas"><?=$rsContatos['email']?></td>
                                <td class="tblColunas"> 
                                    <div class="tblImagens">
                                        <a onclick="return confirm('Deseja realmente excluir o registro?');
                                        " href="../db/deleteDate.php?modo=excluir&id=<?=$rsContatos['idContact']?>">
                                            <div class="delete"></div>
                                        </a>
                                        <div class="view"></div>
                                    </div>
                                </td>
                            </tr>
                        <?php 
                        }
                        ?>
                        
                    <tr id="tblLinhas">
                        <td class="tblColunas">  </td>
                        <td class="tblColunas">  </td>
                        <td class="tblColunas">  </td>
                        <td class="tblColunas">  </td>
                    </tr>
                        
                </table>

            </div>
        </div>
    </main>
    <footer>
        <h1 class="subTitle">
            DESENVOLVIDO POR ERICK MATHEUS
        </h2>
    </footer>
</body>
</html>