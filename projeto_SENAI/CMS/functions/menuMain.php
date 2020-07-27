<?php

    $content="
    <div class='options-index' id='contents-config'>
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='icon-adminContent'>
            <path d='M0 0h24v24H0z' fill='none'/>
            <path d='M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm7-7H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-1.75 9c0 .23-.02.46-.05.68l1.48 1.16c.13.11.17.3.08.45l-1.4 2.42c-.09.15-.27.21-.43.15l-1.74-.7c-.36.28-.76.51-1.18.69l-.26 1.85c-.03.17-.18.3-.35.3h-2.8c-.17 0-.32-.13-.35-.29l-.26-1.85c-.43-.18-.82-.41-1.18-.69l-1.74.7c-.16.06-.34 0-.43-.15l-1.4-2.42c-.09-.15-.05-.34.08-.45l1.48-1.16c-.03-.23-.05-.46-.05-.69 0-.23.02-.46.05-.68l-1.48-1.16c-.13-.11-.17-.3-.08-.45l1.4-2.42c.09-.15.27-.21.43-.15l1.74.7c.36-.28.76-.51 1.18-.69l.26-1.85c.03-.17.18-.3.35-.3h2.8c.17 0 .32.13.35.29l.26 1.85c.43.18.82.41 1.18.69l1.74-.7c.16-.06.34 0 .43.15l1.4 2.42c.09.15.05.34-.08.45l-1.48 1.16c.03.23.05.46.05.69z'/>
        </svg>
        <h1 class='titleOption'>Adm. Conteudo</h1>
        <div class='list'>
            <a href='curiosityConfig.php?constraint=".$constraint."'>Curiosidade</a>
            <a href='aboutConfig.php?constraint=".$constraint."'>Sobre</a>
            <a href='LocalConfig.php?constraint=".$constraint."'>Localizações</a>
        </div>
    </div>
    ";

    $contact="
    <a href='contact.php?constraint=".$constraint."'>
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='iconOption'>
            <path d='M0 0h24v24H0z' fill='none'/>
            <path d='M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1z'/>
        </svg>
    </a>";

    $user="
    <a href='user.php?constraint=".$constraint."'>
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='iconOption'>
            <path d='M0 0h24v24H0z' fill='none'/>
            <path d='M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 
            .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z'/>
        </svg>
    </a>";

    if($level == "Cliente"){
        $content = "
        <div class='options-index' id='contents-disabled'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='iconOption-disabled'>
                <path d='M0 0h24v24H0z' fill='none'/>
                <path d='M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm7-7H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-1.75 9c0 .23-.02.46-.05.68l1.48 1.16c.13.11.17.3.08.45l-1.4 2.42c-.09.15-.27.21-.43.15l-1.74-.7c-.36.28-.76.51-1.18.69l-.26 1.85c-.03.17-.18.3-.35.3h-2.8c-.17 0-.32-.13-.35-.29l-.26-1.85c-.43-.18-.82-.41-1.18-.69l-1.74.7c-.16.06-.34 0-.43-.15l-1.4-2.42c-.09-.15-.05-.34.08-.45l1.48-1.16c-.03-.23-.05-.46-.05-.69 0-.23.02-.46.05-.68l-1.48-1.16c-.13-.11-.17-.3-.08-.45l1.4-2.42c.09-.15.27-.21.43-.15l1.74.7c.36-.28.76-.51 1.18-.69l.26-1.85c.03-.17.18-.3.35-.3h2.8c.17 0 .32.13.35.29l.26 1.85c.43.18.82.41 1.18.69l1.74-.7c.16-.06.34 0 .43.15l1.4 2.42c.09.15.05.34-.08.45l-1.48 1.16c.03.23.05.46.05.69z'/>
            </svg>
            <h1 class='titleOption'>Adm. Conteudo</h1>
            <div class='list'>
                <a href='curiosityConfig.php'>Curiosidade</a>
                <a href='aboutConfig.php'>Sobre</a>
                <a href='LocalConfig.php'>Localizações</a>
            </div>
        </div>";
        $user = "
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='iconOption-disabled'>
            <path d='M0 0h24v24H0z' fill='none'/>
            <path d='M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 
            .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z'/>
        </svg>";
    }elseif ($level == "Operador") {
        $user = "
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' class='iconOption-disabled'>
            <path d='M0 0h24v24H0z' fill='none'/>
            <path d='M3 5v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.11 0-2 
            .9-2 2zm12 4c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z'/>
        </svg>";
    }
?>

<nav class='menu' id='menu'>
    <?=$content?>
    <div class='options-index'>
        <?=$contact?>
        <h1 class='titleOption'>Adm. Fale Conosco</h1>
    </div>
    <div class='options-index'>
        <?=$user?>
        <h1 class='titleOption'>Adm. Usuarios</h1>
    </div>
</nav>