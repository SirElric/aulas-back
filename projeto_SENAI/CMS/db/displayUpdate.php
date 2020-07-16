<?php

    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'displayCuriosity'){

            require_once('connection.php');
            $connect = connectionMySQL();

            if(isset($_GET['id'])){

                $id = $_GET['id'];

                $sql = "select * from tblCuriosity where idCuriosity =".$id;

                $selectContent = mysqli_query($connect, $sql);

                $display = mysqli_fetch_assoc($selectContent);

                if($display['display'] == true){

                    $update = "update tblCuriosity set display = false where idCuriosity =".$id;

                    if(mysqli_query($connect, $update)){
                        echo("
                        <script> 
                            alert('Curiosidade removida do site');
                            location.href = '../curiosityConfig.php';
                        </script>                                              
                    ");
                }

                echo($update);

                //header('location:../content.php');

                }elseif ($display['display'] == false) {
                    $update = "update tblCuriosity set display = true where idCuriosity =".$id;

                    if(mysqli_query($connect, $update)){
                        echo("
                        <script> 
                            alert('Curiosidade sendo exibida no site!');
                            location.href = '../curiosityConfig.php';
                        </script>                                              
                    ");
                    }
                }
            }
        }
        elseif ($_GET['modo'] == 'displayAbout') {

            require_once('connection.php');
            $connect = connectionMySQL();

            if(isset($_GET['id'])){

                $id = $_GET['id'];

                $sql = "select * from tblAbout where idAbout =".$id;

                $selectContent = mysqli_query($connect, $sql);

                $display = mysqli_fetch_assoc($selectContent);

                if($display['display'] == true){

                    $update = "update tblAbout set display = false where idAbout =".$id;

                    if(mysqli_query($connect, $update)){
                        echo("
                        <script> 
                            alert('Informação removida do site!');
                            location.href = '../aboutConfig.php';
                        </script>                                              
                    ");
                }

                echo($update);

                //header('location:../content.php');

                }elseif ($display['display'] == false) {
                    $update = "update tblAbout set display = true where idAbout =".$id;

                    if(mysqli_query($connect, $update)){
                        echo("
                        <script> 
                            alert('Informação sendo exibida no site!');
                            location.href = '../aboutConfig.php';
                        </script>                                              
                    ");
                    }
                }
            }
        }
        elseif ($_GET['modo'] == 'displayLocal') {

            require_once('connection.php');
            $connect = connectionMySQL();

            if(isset($_GET['id'])){

                $id = $_GET['id'];

                $sql = "select * from tblLocation where idLocation =".$id;

                $selectContent = mysqli_query($connect, $sql);

                $display = mysqli_fetch_assoc($selectContent);

                if($display['display'] == true){

                    $update = "update tblLocation set display = false where idLocation =".$id;

                    if(mysqli_query($connect, $update)){
                        echo("
                        <script>
                            alert('Local removido do site!'); 
                            location.href = '../localConfig.php';
                        </script>                                              
                    ");
                }

                echo($update);

                //header('location:../content.php');

                }elseif ($display['display'] == false) {
                    $update = "update tblLocation set display = true where idLocation =".$id;

                    if(mysqli_query($connect, $update)){
                        echo("
                        <script> 
                            alert('Local sendo exibido no site!');
                            location.href = '../localConfig.php';
                        </script>                                              
                    ");
                    }
                }
            }
        }
    }

?>