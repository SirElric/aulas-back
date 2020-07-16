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
                      ( title, textContent, image, display)
                      values
                      ( '".$title."', '".$textCuriosity."', '".$image."', true)";

                if(mysqli_query($connect, $sql)){
                    echo("
                        <script> 
                            alert('curiosidade criada com sucesso!');
                            location.href = '../curiosityConfig.php';
                        </script>                  
                    ");

                    session_destroy();
                }else {
                    echo($sql);   
                }
                
            }elseif (isset($_POST['saveAbout'])) {
                $title = $_POST['titleAbout'];
                $textAbout = $_POST['textAbout'];

                $sql="insert into tblAbout
                      ( title, textContent, display)
                      values
                      ( '".$title."', '".$textAbout."', true)";
                
                if(mysqli_query($connect, $sql)){

                    echo("
                    <script> 
                        alert('Criado com sucesso!');
                        location.href = '../aboutConfig.php';
                    </script>                  
                    ");

                }else {
                    echo($sql);
                    echo($sql);
                }
            }elseif (isset($_POST['saveLocal'])) {
                $name = $_POST['storeName'];
                $email = $_POST['email'];
                $state = $_POST['state'];
                $city = $_POST['city'];
                $street = $_POST['street'];
                $number = $_POST['number'];
                $map = $_POST['map'];

                $sql = "insert into tblLocation
                        ( localName, email, state, city, street, localNumber, map, display)
                        values
                        ( '".$name."','".$email."','".$state."','".$city."','".$street."',".$number.",'".$map."', true)";

                if(mysqli_query($connect, $sql)){
                    echo("
                    <script> 
                        alert('Local criado com sucesso!');
                        location.href = '../localConfig.php';
                    </script>                  
                    ");

                }else {
                    echo($sql);
                }
            }
        }
    }
?>