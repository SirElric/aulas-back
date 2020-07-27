<?php

    function menuProduct(){
        $option="<div class='menuProduct'> Item </div>";
        return $option;
    }

    function cardProduct(){
        $demoProduct="
        <div class='product'>
                <img class='imgProduct' src='image/exemplo.jpg' alt='Produto'>
                <div class='infoBox'>
                    <div class='infProduct'>Nome: <span class='info'>Bolo de Cenoura</span></div>
                    <div class='infProduct'>Descrição: <span class='info'>Bolo</span></div>
                    <div class='oldPrice infProduct'>Preço: <span class='info'>R$20,00</span></div>
                    <div class='infProduct'>Preço: <span class='info'>R$15,00</span></div>
                    <button class='btnProduct'>Detalhes</button>
                </div>
            </div>";
            
        return $demoProduct;
    }
?>