<?php
    if(isset($_GET['modo'])){
        if)($_GET['modo'] == 'submit'){
            require_once('connection.php');
            $connect = connectionMySQL();

            if(isset($_POST['saveButton'])){
                $title = $_POST['titleCuriosity'];
                $text = $_POST['textCuriosity'];
                
            }
        }
    }
?>