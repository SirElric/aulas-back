<?php

$constraint = $_GET['constraint'];

if(isset($_GET['modo'])){

    if ($_GET['modo'] == 'excluir'){

        require_once('connection.php');

        $connect = connectionMySQL();

        if (isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "delete from tblcontact where idContact = " . $id;
            
            if(mysqli_query($connect, $sql)){
                
                header('location:../contact.php?constraint='.$constraint);
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

                header('location:../user.php?constraint='.$constraint); 
                exit;
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

                header('location:../curiosityConfig.php?constraint='.$constraint);
                exit;
            }
        }
    }elseif ($_GET['modo'] == 'deleteAbout') {
        require_once('connection.php');

        $connect = connectionMySQL();

        if (isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "delete from tblAbout where idAbout = " . $id;
            
            if(mysqli_query($connect, $sql)){

                header('location:../aboutConfig.php?constraint='.$constraint);
                exit;
            }
        }
    }elseif ($_GET['modo'] == 'deleteLocal') {
        require_once('connection.php');

        $connect = connectionMySQL();

        if (isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "delete from tblLocation where idLocation = " . $id;
            
            if(mysqli_query($connect, $sql)){

                header('location:../localConfig.php?constraint='.$constraint);
                exit;
            }
        }
    }
}
?>