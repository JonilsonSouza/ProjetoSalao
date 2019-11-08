<?php
require_once "Conexao.php";

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
$assunto = filter_input(INPUT_POST,'assunto');
$msg = filter_input(INPUT_POST, 'mensagem');

$Sql = "SELECT * FROM contatocliente WHERE nome = '$nome' AND email = '$email'" or die(mysqli_error($conexao));

$select = mysqli_query($conexao, $Sql);

$array = mysqli_fetch_array($select);

$logarray = $array['email'];

if ($email == "" || $email == null) {

    echo"<script language='javascript' type='text/javascript'>alert('O campo nome e / ou Email deve ser preenchido');window.location.href='Contato.php';</script>";

    
} else {


        $sql_Insert = "INSERT INTO contatocliente(nome,email,telefone,assunto,mensagem) VALUES ('$nome','$email','$telefone','$assunto','$msg')";

        $insert = mysqli_query($conexao, $sql_Insert);

        if ($insert) {

            echo"<script language='javascript' type='text/javascript'>alert('Mensagem Enviado com Sucesso!');window.location.href='Contato.php';</script>";
        } else {

            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível Enviar Essa Mensagem');window.location.href='Contato.php';</script>";
        }
    }



?>

