<?php

if(isset($_GET['modo'])){

    if ($_GET['modo'] == 'excluir'){

        require_once('connection.php');

        $connect = connectionMySQL();

        if (isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "delete from tblcontact where idContact = " . $id;
            
            if(mysqli_query($connect, $sql)){
                
                header('location:../contact.php');
            } 
        }
    }
    else if($_GET['modo'] == 'deleteUser'){
        
        require_once('connection.php');

        $connect = connectionMySQL();

        if (isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "delete from tblUser where idUser = " . $id;
            
            if(mysqli_query($connect, $sql)){

                header('location:../user.php');

            }
        }
    }
    elseif ($_GET['modo'] == 'deleteCuriosity') {
        require_once('connection.php');

        $connect = connectionMySQL();

        if (isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "delete from tblCuriosity where idCuriosity = " . $id;
            
            if(mysqli_query($connect, $sql)){

                header('location:../content.php');

            }
        }
    }elseif ($_GET['modo'] == 'deleteAbout') {
        require_once('connection.php');

        $connect = connectionMySQL();

        if (isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "delete from tblAbout where idAbout = " . $id;
            
            if(mysqli_query($connect, $sql)){

                header('location:../content.php');

            }
        }
    }
}
?>