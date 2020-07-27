<?php
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'inserir'){

            require_once('connection.php');
            $connect = connectionMySQL();

            $constraint = $_GET['constraint'];

            if(isset($_POST['saveButton'])){
                $sql="select * from tblUser where nickname = '".$_POST['nick']."'";

                $getNick = mysqli_query($connect, $sql);

                if ($rsNick = mysqli_fetch_assoc($getNick)) {
                    echo("
                    <script> 
                        alert('Apelido existente!')
                        window.history.back();
                    </script>                                              
                ");
                }else{

                    $mainName = $_POST['name'];
                    $surname = $_POST['surname'];
                    $name = $mainName."-".$surname;

                    $email = $_POST['email'];
                    $cpf = $_POST['cpf'];

                    $nick = $_POST['nick'];
                    $password = md5($_POST['password']);

                    $cellphone = $_POST['cellphone'];
                    $tellphone = $_POST['tellphone'];

                    $idConstraint = $_POST['permission'];

                    $nascimento = explode("/", $_POST['birth']);
                    $birth = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

                    $sql = "insert into tblUser
                            ( username, email, cpf, nickname, userpassword, cellphone, tellphone, idConstraint, birthDate)
                            value
                            ( '".$name."', '".$email."', '".$cpf."', '".$nick."','".$password."','".$cellphone."',
                            '".$tellphone."', '".$idConstraint."', '".$birth."')";

                    if(mysqli_query($connect, $sql)){
                        
                        echo("
                                <script> 
                                    alert('Registro adicionado com sucesso!');
                                    location.href = '../user.php?constraint=".$constraint."';
                                </script>
                                    
                            ");

                    }else{
                        echo($sql);   
                    }
                }
            }
        }
    }
?>

                