<?php 

    function headerMenu(){
        $menu = 
        "<header>
        <div class='container'>
            <div class='container-header'>
                <a href='../index.php'><img src='../image/icones/bread.png' alt='logo'></a>
                <div class='open-menu'></div>
                <nav class='menu'>
                    <ul class='list-menu'>
                        <li><a href='product.php' class='linkPages'>PRODUTOS</a></li>
                        <li><a href='about.php'class='linkPages'>SOBRE</a></li>
                        <li><a href='sale.php'class='linkPages'>PROMOÇÕES</a></li>
                        <li><a href='localization.php'class='linkPages'>LOCALIZAÇÃO</a></li>
                        <li><a href='special.php'class='linkPages'>ESPECIAL</a></li>
                        <li><a href='register.php'class='linkPages'>CONTATO</a></li>
                    </ul>
                </nav>
                <div id='loginBox'>
                    <form name='frmForm' method='post' action='home.php'>
                        <div class='login'>
                                Usuario:<br>
                                <input class='textInput' type='text' name='txtUser' value=''>
                        </div>
                        <div class='login'>
                            Senha:<br>
                            <input class='textInput' type='password' name='txtPassword' value=''>
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
        <script src='../js/menuMobile.js'></script>";
        return $menu;
    }

    function headerMenuHome(){
        $menu = 
        "<header>
        <div class='container'>
            <div class='container-header'>
                <img src='image/icones/bread.png' alt='logo'>
                <div class='open-menu'></div>
                <nav class='menu'>
                    <ul class='list-menu'>
                        <li><a href='pages/product.php' class='linkPages'>PRODUTOS</a></li>
                        <li><a href='pages/about.php'class='linkPages'>SOBRE</a></li>
                        <li><a href='pages/sale.php'class='linkPages'>PROMOÇÕES</a></li>
                        <li><a href='pages/localization.php'class='linkPages'>LOCALIZAÇÃO</a></li>
                        <li><a href='pages/special.php'class='linkPages'>ESPECIAL</a></li>
                        <li><a href='pages/register.php'class='linkPages'>CONTATO</a></li>
                    </ul>
                </nav>
                <div id='loginBox'>
                    <form name='frmForm' method='post' action='home.php'>
                        <div class='login'>
                                Usuario:<br>
                                <input class='textInput' type='text' name='txtUser' value=''>
                        </div>
                        <div class='login'>
                            Senha:<br>
                            <input class='textInput' type='password' name='txtPassword' value=''>
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
        <script src='../js/menuMobile.js'></script>";
        return $menu;
    }
?>