
<?php
session_start();
 require_once 'Conexao.php';
 
  $login = filter_input(INPUT_POST,'login');
  $senha = filter_input(INPUT_POST,'senha');
  $codigo = filter_input(INPUT_POST,'codigo');
  $entrar = filter_input(INPUT_POST,'btnEntrar');

$Sql_Select = "SELECT * FROM cliente WHERE login = '$login' AND senha = '$senha'" or die(mysqli_error($conexao));

$select = mysqli_query($conexao,$Sql_Select);
$login  = mysqli_fetch_array($select);

if ($login == "" || $login == null) {
  echo json_encode(["msg" => "Login ou senha inválido.", "type" => "error"]);
}elseif(mysqli_num_rows($select) <= 0){
  echo json_encode(["msg" => "Login ou senha inválido.", "type" => "error"]);
}else{
  $_SESSION['Login'] = $login;
  echo json_encode(["msg" => "Login efetuado com sucesso.", "type" => "success", "url"]);   
}




