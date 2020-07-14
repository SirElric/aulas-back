<?php

    //Variavel para identificar qual a controller será instanciada
    $controler = null;

    //Variavel para identificar qual a ação da controller {inserir, atualizar, excluir}
    $modo = null;


    if (isset($_GET['controller'])) {

        //Recebe qual a controle será instanciada
        $controller = strToupper($_GET['controller']);

        switch ($controller) {
            case 'CONTATOS':

                if(isset($_GET['modo'])){
                
                    //Recebe a variavel modo que foi enviada pela view
                    $modo = strToupper($_GET['modo']);

                    //import do arquivo da controller
                    require_once('controller/contatoController.php');

                    //Instancia da class Contato Controller
                    $contatoController = new ContatoController();
                    
                    //Valida qual a ação será chamada na controller (inserir, editar, excluir)
                    switch ($modo) {

                        case 'INSERIR':
                            echo("modo inserir");
                            $contatoController->inserirContato();
                        break;

                        case 'EDITAR':
                            $contatoController->atualizarContato();
                        break;

                        case 'EXCLUIR':
                            $contatoController->excluirContato();
                        break;
                    }
                }

            break;
        }
    }

?>