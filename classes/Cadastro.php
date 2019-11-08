<?php
require_once "Conexao.php";

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
$celular = filter_input(INPUT_POST,'celular');
$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');
$codigo = filter_input(INPUT_POST, 'codCliente');

$Sql_Select = "SELECT * FROM cliente WHERE login = '$login' AND senha = '$senha'";

$select = mysqli_query($conexao,$Sql_Select);

$array = mysqli_fetch_array($select);

$logarray = $array['login'];

if ($login == "" || $login == null) {

    echo"<script language='javascript' type='text/javascript'>alert('O campo login e / ou Senha deve ser preenchido');window.location.href='Formulario.php';</script>";
} else {

    if ($logarray == $login) {

        echo"<script language='javascript' type='text/javascript'>alert('Esse login ou Senha já existe');window.location.href='Formulario.php';</script>";

        die();
    } else {

        $sql_Insert = "INSERT INTO cliente(nome,email,telefone,celular,login,senha) VALUES ('$nome','$email','$telefone','$celular','$login','$senha')";

        $insert = mysqli_query($conexao, $sql_Insert);

        if ($insert) {

            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php';</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='Formulario.php';</script>";
        }
    }
}


?>
