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
                            alert('não exibido');
                            location.href = '../content.php';
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
                            alert('exibido!');
                            location.href = '../content.php';
                        </script>                                              
                    ");
                    }
                }
            }
        }
    }

?>