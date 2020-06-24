<?php
    require_once('functions/menu.php');
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
        <h1 class="title">
            CMS - Sistema de Gerenciamento do Site.
        </h1>
        <img class="logo" src="img/bread.png" alt="logo">
    </header>
    <main>
        <?=(menu());?>
        <div class="content">
            <div id="titleBox" colspan="5">
                <h1 class="title"> Consulta de Dados.</h1>
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
                <div class="divColumn"> Opções</div>
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
                                <a onclick="return confirm('Deseja realmente excluir o registro?');
                                " href="db/deleteDate.php?modo=excluir&id=<?=$rsContacts['idContact']?>">
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
        DESENVOLVIDO POR ERICK MATHEUS
    </footer>
</body>
</html>