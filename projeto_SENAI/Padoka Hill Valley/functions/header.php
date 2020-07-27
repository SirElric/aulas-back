<?php 

    function headerSite(){
        $header="
        <header>
        <div class='container'>
            <div class='container-header'>
                <a href='index.php'><img src='image/icones/bread.png' alt='logo' class='img-header'></a>
                <div class='open-menu'></div>
                <nav class='menu'>
                    <ul class='list-menu'>
                        <li><a href='curiosities.php' class='linkPages'>CURIOSIDADES</a></li>
                        <li><a href='about.php' class='linkPages'>SOBRE</a></li>
                        <li><a href='sale.php' class='linkPages'>PROMOÇÕES</a></li>
                        <li><a href='localization.php' class='linkPages'>LOCALIZAÇÃO</a></li>
                        <li><a href='special.php' class='linkPages'>ESPECIAL</a></li>
                        <li><a href='register.php' class='linkPages'>CONTATO</a></li>
                    </ul>
                </nav>
                <div id='loginBox'>
                    <form name='frmForm' method='post' action='db/login.php?modo=getUser'>
                        <div class='login'>
                            Usuario:<br>
                            <input class='textInput' type='text' name='user' placeholder='Apelido' value=''>
                        </div>
                        <div class='login'>
                            Senha:<br>
                            <input class='textInput' type='password' name='password' placeholder='Senha' value=''>
                        </div>
                        <div class='confirmButtonBox'>
                            <input class='confirmButton' type='submit' name='btnConfirm' value='OK'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <script src='http://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='js/menuMobile.js'></script>";
    return $header;
    }

?>
