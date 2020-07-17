<?php

    if (isset($_GET['modo'])){

        if($_GET['modo'] == 'update'){

            require_once('connection.php');
            $connect = connectionMySQL();  

            $id = $_GET['id'];

            if(isset($_POST['saveButton'])){       
                
                $password = md5($_POST['password']);

                $sql = "select tblUser.userpassword from tblUser where idUser = ".$id;
                
                $getPassword = mysqli_query($connect, $sql);

                if ($rsPassword = mysqli_fetch_assoc($getPassword)) {
                    if ($password == $rsPassword['userpassword']) {

                        $mainName = $_POST['name'];
                        $surname = $_POST['surname'];
                        $name = $mainName."-".$surname;

                        $email = $_POST['email'];
                        $cpf = $_POST['cpf'];
                        $newpassword = $_POST['newpassword'];
                        if ($newpassword == null) {
                            $newpassword = md5($_POST['password']);
                            echo($newpassword);
                        }else{
                            $newpassword = $_POST['newpassword'];
                            echo($newpassword);
                        }
                        $cellphone = $_POST['cellphone'];
                        $tellphone = $_POST['tellphone'];

                        $idConstraint = $_POST['permission'];

                        $nascimento = explode("/", $_POST['birth']);
                        $birth = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

                        $sql = "update tblUser set

                                username = '".$name."',
                                email = '".$email."',
                                cpf = '".$cpf."',
                                userpassword = '".$newpassword."',
                                cellphone = '".$cellphone."',
                                tellphone = '".$tellphone."',
                                idConstraint = '".$idConstraint."',
                                birthDate = '".$birth."'
                                
                                where idUser = ".$id;                    
                        
                        if(mysqli_query($connect, $sql)){
                            echo("
                                <script> 
                                    alert('Registro editado com sucesso!');
                                    location.href = '../user.php';
                                </script>
                                    
                            ");
                        }else{
                            echo($sql);  
                        }
                    }else{
                        echo("Senha Atual Incorreta");
                    }
                }

            }else{
                echo("
                    <script> 
                        location.href = '../user.php';
                    </script>
            
                ");
            }
        }      
    }
?>