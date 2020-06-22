<?php

//Verifica se a variavel modo existe no GET
if(isset($_GET['modo']))
{
    //Valida se o conteudo da variavel é para excluir
    if ($_GET['modo'] == 'excluir')
    {
        //Import da biblioteca de conexão
        require_once('conexao.php');

        //Abre a conexão com o BD
        $conex = conexaoMysql();

        //Verifica se o ID foi enviado pelo GET
        if (isset($_GET['id']))
        {

            //Resgata a variavel Id que foi enviada pela pagina da index
            $id = $_GET['id'];

            //Script de delete
            $sql = "delete from tblcontatos where idContato = " . $id;
            
           
           
            //Executa o script no BD
            if(mysqli_query($conex, $sql)){
                unlink('arquivos/'.$_GET['image']);
                
                //Redireciona para a página index
                header('location:../index.php');
            }
        }
    }

}
?>