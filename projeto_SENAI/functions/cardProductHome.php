<?php

    function menuProduct(){
        $option="<div class='menuProduct'> Item </div>";
        return $option;
    }

    function cardProduct(){
        $demoProduct="
            <div class='product'>
                <img class='imgProduct' src='../image/exemplo.jpg' alt='Produto'>
                <div class='infProduct'>Nome:</div>
                <div class='infProduct'>Descrição:</div>
                <div class='infProduct'>Preço:</div>
                <button class='btnProduct'>Detalhes</button>
            </div>";
        
        return $demoProduct;
    }
?>