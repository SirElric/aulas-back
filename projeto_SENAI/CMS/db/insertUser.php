<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'inserir'){

            require_once('connection.php');
            $connect = connectionMySQL();

            if(isset($_POST['saveButton'])){
                $mainName = $_POST['name'];
                $surname = $_POST['surname'];
                $name = $mainName."-".$surname;

                $email = $_POST['email'];
                $cpf = $_POST['cpf'];
                $password = $_POST['password'];
                $cellphone = $_POST['cellphone'];
                $tellphone = $_POST['tellphone'];

                $idConstraint = $_POST['permission'];

                $nascimento = explode("/", $_POST['birth']);
                $birth = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

                $sql = "insert into tblUser
                        ( username, email, cpf, userpassword, cellphone, tellphone, idConstraint, birthDate)
                        value
                        ( '".$name."', '".$email."', '".$cpf."','".$password."','".$cellphone."',
                         '".$tellphone."', '".$idConstraint."', '".$birth."')";

                if(mysqli_query($connect, $sql)){
                    echo("
                        <script> 
                            alert('Registro inserido com sucesso!');
                            location.href = '../user.php';
                        </script>                                              
                    ");
                }else{
                    echo($sql);   
                }
            }
        }
    }
?>