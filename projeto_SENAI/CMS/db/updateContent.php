<?php

    if (isset($_GET['modo'])){

        if($_GET['modo'] == 'update'){

            require_once('connection.php');
            $connect = connectionMySQL();  

            $constraint = $_GET['constraint'];

            $id = $_GET['id'];

            if(isset($_POST['saveCuriosity'])){         

                $title = $_POST['titleCuriosity'];
                $textContent = $_POST['textCuriosity'];
                
                session_start();
                $image = $_SESSION['imageCuriosity'];

                $sql = "update tblCuriosity set

                            title = '".$title."',
                            textContent = '".$textContent."',
                            image = '".$image."'
                            
                            where idCuriosity = ".$id;                         
                
                if(mysqli_query($connect, $sql)){
                    echo("
                            <script> 
                                alert('Registro editado com sucesso!');
                                location.href = '../curiosityConfig.php?constraint=".$constraint."';
                            </script>
                            
                    ");
                    session_destroy();
                }else{
                    echo("<script> 
                        alert('Erro ao executar o script!') 
                        window.history.back();
                    </script>");    
                }

            }elseif (isset($_POST['saveAbout'])) {

                $title = $_POST['titleAbout'];
                $textContent = $_POST['textAbout'];

                $sql = "update tblAbout set

                            title = '".$title."',
                            textContent = '".$textContent."'
                            
                            where idAbout = ".$id;                         
                
                if(mysqli_query($connect, $sql)){
                    echo("
                            <script> 
                                alert('Registro editado com sucesso!');
                                location.href = '../aboutConfig.php?constraint=".$constraint."';
                            </script>
                            
                    ");
                }else{
                    echo("<script> 
                        alert('Erro ao executar o script!') 
                        window.history.back();
                    </script>");   
                }
            }elseif (isset($_POST['saveLocal'])) {

                $name = $_POST['storeName'];
                $email = $_POST['email'];
                $state = $_POST['state'];
                $city = $_POST['city'];
                $street = $_POST['street'];
                $number = $_POST['number'];
                $map = $_POST['map'];

                $sql = "update tblLocation set

                            localName = '".$name."',
                            email = '".$email."',
                            state = '".$state."',
                            city = '".$city."',
                            street = '".$street."',
                            localNumber = '".$number."',
                            map = '".$map."'
                            
                            where idLocation = ".$id;                         
                
                if(mysqli_query($connect, $sql)){
                    echo("
                        <script> 
                            alert('Registro editado com sucesso!');
                            location.href = '../localConfig.php?constraint=".$constraint."';
                        </script>
                    ");
                }else{
                    echo("<script> 
                        alert('Erro ao executar o script!') 
                        window.history.back();
                    </script>");   
                }
            }
        }      
    }
?>