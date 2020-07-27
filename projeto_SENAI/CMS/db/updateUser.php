<?php

    if (isset($_GET['modo'])){

        if($_GET['modo'] == 'update'){

            require_once('connection.php');
            $connect = connectionMySQL();  

            $constraint = $_GET['constraint'];

            $id = $_GET['id'];

            if(isset($_POST['saveButton'])){       
                
                $password = md5($_POST['password']);
                $nick = $_POST['nick'];

                $sql = "select tblUser.userpassword, tblUser.nickname from tblUser where idUser = ".$id;
                
                $getUser = mysqli_query($connect, $sql);

                if ($rsUser = mysqli_fetch_assoc($getUser)) {
                    if ($password == $rsUser['userpassword'] && $nick == $rsUser['nickname']) {

                        $mainName = $_POST['name'];
                        $surname = $_POST['surname'];
                        $name = $mainName."-".$surname;

                        $email = $_POST['email'];
                        $cpf = $_POST['cpf'];
                        
                        $cellphone = $_POST['cellphone'];
                        $tellphone = $_POST['tellphone'];

                        $idConstraint = $_POST['permission'];

                        $nascimento = explode("/", $_POST['birth']);
                        $birth = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

                        $newnick = $_POST['newnick'];
                        $newpassword = $_POST['newpassword'];

                        if ($newnick == null) {
                            $newnick = $_POST['nick'];
                        }else{
                            $newnick = $_POST['newnick'];
                        }
                        
                        if ($newpassword == null) {
                            $newpassword = md5($_POST['password']);
                        }else{
                            $newpassword = md5($_POST['newpassword']);
                        }

                        $sql = "update tblUser set

                                username = '".$name."',
                                email = '".$email."',
                                cpf = '".$cpf."',
                                nickname = '".$newnick."',
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
                                    location.href = '../user.php?constraint=".$constraint."';
                                </script>
                                    
                            ");
                        }else{
                            echo($sql);  
                        }
                    }else{
                    echo("<script> 
                        alert('Usuario ou senha incorreto!') 
                        window.history.back();
                    </script>");   
                    }
                }

            }
        }      
    }
?>