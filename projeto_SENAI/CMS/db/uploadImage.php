<?php
    if( $_FILES['imageCuriosity']['size'] > 0 && $_FILES['imageCuriosity']['type'] != ""){

        $archives = "archives/";

        $archivesSize = round($_FILES['imageCuriosity']['size']/1024);

        $allowedFiles = array("image/jpeg","image/jpg","image/png","image/gif");

        $typeFiles = $_FILES['imageCuriosity']['type'];

        if(in_array($typeFiles, $allowedFiles)){

            if($archivesSize <= 2000){

                $fileName = pathinfo($_FILES['imageCuriosity']['name'], PATHINFO_FILENAME);
                $fileExtension = pathinfo($_FILES['imageCuriosity']['name'], PATHINFO_EXTENSION);

                $encryptedFileName = md5($fileName . uniqid(time()));

                $image = $encryptedFileName.".".$fileExtension;

                $tempFile = $_FILES['imageCuriosity']['tmp_name'];

                if(move_uploaded_file($tempFile, $archives.$image)){

                    session_start();

                    echo("<img class='photo' src='db/archives/".$image."'>");

                    $_SESSION['imageCuriosity'] = $image;

                }else{
                    echo("erro");
                }
            }else{
                echo("não permitido arquivos maiores que 2MB");
            }
        }else{
            echo("arquivos não permitidos");
        }
    }else{
        echo("arquivo invalido");
    }
?>