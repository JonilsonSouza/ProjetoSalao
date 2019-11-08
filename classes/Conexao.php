<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$dbname = "projetosalao";

try{
   $conexao = new mysqli($servidor, $usuario, $senha, $dbname);
} catch (Exception $e) {
    echo $e->getMessage();
}

