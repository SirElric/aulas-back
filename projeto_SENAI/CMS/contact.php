<?php
    require_once('db/connection.php');
    $connect = connectionMysql();
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/showContact.css">
    <title>CMS - Sistema de Gerenciamento do Site</title>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('.view').click(function(){
                $('#showContact').fadeIn(1000);
            });
        });

        function showContact(idContact){
            $.ajax({
                type: "POST",
                url: "db/showDate.php",
                data: {modo:'view', id:idContact},
                success: function (dados){
                    $('#showContent').html(dados);
                }
            });
        }
    </script>
</head>
<body>
    <div id="showContact">
        <div id="showContent"></div>
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
                    <a href="index.php">
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
            <div id="titleBox" colspan="5">
                <h1 class="titleQuery"> Consulta de Dados.</h1>
                <form action="contact.php" method="POST">
                    <select name="filter" id="filterBox">
                        <option value="">Filtrar</option>
                        <option value="suggestion">Sugestão</option>
                        <option value="review">Critica</option>
                    </select>
                    <input type="submit" name="enviar" value="" class="filterBtn">
                </form>
            </div>
            <div class="tbLine tbType">
                <div class="divColumn"> Nome </div>
                <div class="divColumn"> Menssagem </div>
                <div class="divColumn"> e-mail </div>
            </div>
            <div id="dataQuery">     
                <table id="tblQuery" >                        
                    <?php
                    
                        $filter = "idContact";
                        $order = "desc";

                        if(isset($_POST['enviar'])){
                            $filterOption = $_POST['filter'];
                            
                            if($filterOption == 'suggestion'){
                                $order = "asc";
                                $filter = "OptionMessage";

                            }else if($filterOption == 'review'){
                                $filter = "OptionMessage";

                            }
                        }
                        $sql = "
                            select tblContact.idContact, tblContact.clientname, tblContact.OptionMessage, tblContact.email
                            FROM tblcontact
                            order by tblContact.".$filter." ".$order."; 
                            ";

                        $selectContatos = mysqli_query($connect, $sql);                                           
                        
                        while ($rsContacts = mysqli_fetch_assoc($selectContatos))
                        {
                                
                        ?>
                        <tr class="tbLine">
                            <td class="tbColumn"><?=$rsContacts['clientname']?></td>
                            <td class="tbColumn">
                                <?php
                                    if($rsContacts['OptionMessage'] == 0){
                                        echo("Sugestão");
                                    }else{
                                        echo("Critica");
                                    }
                                ?>
                            </td>
                            <td class="tbColumn"><?=$rsContacts['email']?></td>
                            <td class="tbColumn"> 
                                <div class="tbImage">
                                    <a onclick="return confirm('Deseja realmente excluir o registro?');
                                    " href="db/deleteDate.php?modo=excluir&id=<?=$rsContacts['idContact']?>">
                                        <div class="delete"></div>
                                    </a>
                                    <div class="view" onclick="showContact(<?=$rsContacts['idContact']?>);"></div>
                                </div>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                        
                    <tr class="tbLine">
                        <td class="tbColumn">  </td>
                        <td class="tbColumn">  </td>
                        <td class="tbColumn">  </td>
                        <td class="tbColumn">  </td>
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