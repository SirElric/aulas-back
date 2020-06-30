<?php
    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'visualizar'){
            if(isset($_POST['id'])){
                //Import da biblioteca de conexão
                require_once('conexao.php');

                //Abre a conexão com o BD
                $conex = conexaoMysql();

                $id = $_POST['id'];

                $sql = "select tblContatos.*, tblEstados.nome as nomeEstado, tblEstados.sigla
                        from tblContatos, tblEstados
                        where tblEstados.idEstado = tblContatos.idEstado
                        and tblContatos.idContato = ".$id;

                $selectContato = mysqli_query($conex, $sql);

                if($rsContatos = mysqli_fetch_assoc($selectContato)){
                    $nome = $rsContatos['nome'];
                    $endereco = $rsContatos['endereco'];
                    $bairro = $rsContatos['bairro'];
                    $cep = $rsContatos['cep'];
                    $telefone = $rsContatos['telefone'];
                    $celular = $rsContatos['celular'];
                    $email = $rsContatos['email'];
                    $estado = $rsContatos['nomeEstado'] . " - ".$rsContatos['sigla'];
                    $sexo = $rsContatos['sexo'];
                    $obs = $rsContatos['obs'];
                    $dtNasc = explode("-", $rsContatos['dtNasc']);
                    $dtNascBr = $dtNasc[2]."/".$dtNasc[1]."/".$dtNasc[0];
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function(){
                $('.exit').click(function(){
                    $('#modal').fadeOut(500);

                });
            });
    </script>
    <title>Show Contact</title>
</head>
<body>
    <div>
        <table class="tblInfo">
            <tr class="trtitle">
                <td class="trtitle" colspan="2">
                    <h1 class="title">Contato</h1>
                    <div class="exit"></div>
                </td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Nome:</td>
                <td class="tdInfo"><?=$nome?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Endereco:</td>
                <td class="tdInfo"><?=$endereco?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Bairro:</td>
                <td class="tdInfo"><?=$bairro?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">CEP:</td>
                <td class="tdInfo"><?=$cep?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Estado:</td>
                <td class="tdInfo"><?=$estado?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Telefone:</td>
                <td class="tdInfo"><?=$telefone?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Celular:</td>
                <td class="tdInfo"><?=$celular?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">E-mail:</td>
                <td class="tdInfo"><?=$email?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Data Nascimento:</td>
                <td class="tdInfo"><?=$dtNascBr?></td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Sexo:</td>
                <td class="tdInfo">
                    <?php 
                        if($sexo == 'F'){
                            echo('Feminino');
                        }else{
                            echo('Masculino');
                        } 
                    ?>
                </td>
            </tr>
            <tr class="trInfo">
                <td class="tdType">Observações:</td>
                <td class="tdInfo"><?=$obs?></td>
            </tr>
        </table>
    </div>
</body>
</html>