<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'inserir'){

            require_once('connection.php');
            $connect = connectionMySQL();

            if(isset($_POST['saveBtn'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $cellphone = $_POST['cellphone'];
                $tellphone = $_POST['tellphone'];
                $permission = $_POST['permission'];

                $nascimento = explode("/", $_POST['birth']);
                $birth = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

                $sql = "insert into tblUser
                        ( username, email, cellphone, tellphone, permission, birthDate)
                        value
                        ( '".$name."', '".$email."', '".$cellphone."', '".$tellphone."', '".$permission."', '".$birth."')
                        ";

                if(mysqli_query($connect, $sql)){
                    echo("
                        <script> 
                            alert('Registro inserido com sucesso!');
                            location.href = '../index.php';
                        </script>                                              
                    ");
                }else{
                    echo($sql);   
                }
            }
        }
    }
?>