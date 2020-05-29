<?php

    function menuProduct(){
        $option="<div class='menuProduct'> Item </div>";
        return $option;
    }

    function cardProduct(){
        $demoProduct="
            <div class='product'>
                                
                <div class='productInfo'>
                    <h3>Bolo de Laranja</h3>
                    <p>
                        Cillum irure adipisicing commodo consequat cupidatat commodo
                        consectetur adipisicing magna sint id labore magna proident.
                        Minim id est excepteur nisi duis ut ea cupidatat deserunt 
                        aliqua elit esse consectetur. Proident aliquip aute minim 
                        elit labore ea ut dolore amet culpa ad eiusmod consectetur.
                    </p>
                </div>
                <img class='productImg' src='../image/exemplo.jpg' alt='Produto'>
            </div>";
            
        return $demoProduct;
    }
?>