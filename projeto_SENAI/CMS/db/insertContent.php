<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'submit'){
            require_once('connection.php');
            $connect = connectionMySQL();

            if(isset($_POST['saveCuriosity'])){
                $title = $_POST['titleCuriosity'];
                $textCuriosity = $_POST['textCuriosity'];

                session_start();
                $image = $_SESSION['imageCuriosity'];

                $sql="insert into tblCuriosity
                      ( title, textContent, image)
                      values
                      ( '".$title."', '".$textCuriosity."', '".$image."', true)";

                if(mysqli_query($connect, $sql)){
                    echo("
                        <script> 
                            alert('curiosidade inserido com sucesso!');
                            location.href = '../content.php';
                        </script>                  
                    ");

                    session_destroy();
                }else {
                    echo("<script> 
                        alert('Erro ao executar o script!') 
                        window.history.back();
                    </script>");   
                }
            }elseif (isset($_POST['saveAbout'])) {
                $title = $_POST['titleAbout'];
                $textAbout = $_POST['textAbout'];

                $sql = "insert into tblAbout
                        ( title, textContent, display)
                        values
                        ( '".$title."', '".$textAbout."', true)";
                
                if(mysqli_query($connect, $sql)){

                    echo("
                    <script> 
                        alert('Sobre inserido com sucesso!');
                        location.href = '../content.php';
                    </script>                  
                    ");

                }else {
                    echo($sql);
                    /*echo("<script> 
                        alert('Erro ao executar o script!') 
                        window.history.back();
                    </script>");   */
                }
            }elseif (isset($_POST['saveLocal'])) {
                $name = $_POST['storeName'];
                $email = $_POST['email'];
                $state = $_POST['state'];
                $city = $_POST['city'];
                $street = $_POST['street'];
                $number = $_POST['number'];

                $sql = "insert into tblLocation
                        ( localName, email, state, city, street, localNumber)
                        values
                        ( '".$name."','".$email."','".$state."','".$city."','".$street."',".$number.")";

                echo($sql);

                if(mysqli_query($connect, $sql)){
                    echo("
                    <script> 
                        alert('Local inserido com sucesso!');
                        location.href = '../content.php';
                    </script>                  
                    ");

                }else {
                     
                }
            }
        }
    }
?>