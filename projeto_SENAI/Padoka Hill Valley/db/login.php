<?php

    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'getUser'){

            require_once('connection.php');
            $connect = connectionMysql();

            if(isset($_POST['btnConfirm'])){
                $nick = $_POST['user'];
                $password = md5($_POST['password']);

                $sql = "
                select tblUser.*, tblConstraint.levelName as level
                from tblUser, tblConstraint 
                where tblConstraint.idConstraint = tblUser.idConstraint  
                and tblUser.nickname = '".$nick."' and tblUser.userpassword = '".$password."'; 
                ";

                $getUser = mysqli_query($connect, $sql);

                if($user = mysqli_fetch_assoc($getUser)){

                    $name = $user['username'];
                    $level = $user['level'];

                    echo("
                    <script> 
                        alert('Conectando com CMS!');
                        location.href = '../../cms/index.php?modo=login&constraint=".$level."_".$name."'; 
                    </script>"
                    );

                }else{
                    echo("
                    <script> 
                        alert('usuario ou senha incorreta!');
                        location.href = '../index.php'; 
                    </script>
                    ");
                }
            }
        }
    }

?>