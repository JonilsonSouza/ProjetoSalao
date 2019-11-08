<?php
require_once "Conexao.php";

//$dados = filter_input_array(INPUT_POST);

//print_r($dados);


$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email');
$telefone = filter_input(INPUT_POST,'telefone');
$celular = filter_input(INPUT_POST,'celular');
$codigo = filter_input(INPUT_POST, 'codigo');
$login = filter_input(INPUT_POST,'login');
$senha = filter_input(INPUT_POST, 'senha');

$sql = "UPDATE cliente SET nome ='{$nome}', email='{$email}', telefone='{$telefone}',
celular='{$celular}' WHERE codCliente = {$codigo}";

$atualizar = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));

    if ($atualizar) {

            echo"<script language='javascript' type='text/javascript'>alert('Usuário Atualizado com sucesso!');window.location.href='lista.php';</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível atualizar esse usuário');window.location.href='lista.php';</script>";
        }

?>