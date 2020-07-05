<?php

    function cardLocal(){
        $local="
            <div id='local-box'>
                <div class='local-info'>
                        <div id='li-name' class='li-info'>Padoka Hill Valley</div>
                        <div id='li-state' class='li-info'>São Paulo</div>
                        <div id='li-city' class='li-info'>Jandira</div>
                        <div id='li-street' class='li-info'>Rua Elton Silva</div>
                        <div id='li-number' class='li-info'>905</div>
                        <div id='li-email' class='li-info'>padokaHillValley@gmail.com</div>
                </div>
                <div class='local-map'>
                    <iframe id='map' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.103052084892!2d-46.900270784846555!3d-23.528795666275997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0154039cb55b%3A0xadf34a919f156950!2sSENAI%20Jandira%20-%20Professor%20Vicente%20Amato!5e0!3m2!1spt-BR!2sbr!4v1585676000061!5m2!1spt-BR!2sbr' 
                    allowfullscreen='' aria-hidden='false' tabindex='0'>
                    </iframe>
                </div>
            </div>
        ";

        return $local;
    }

?>