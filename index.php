<?php
session_start();
ob_start();

if(empty($_SESSION['Login'])){
  header("Location:views/Login.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Cadastro de Clientes</title>
        <link  href="bootstrap/css/bootstrap.min.css"rel="stylesheet"> 
        <style type="text/css">
            #tamanhoContainer{
                width: 500px;

        </style>
    </head>
    <body>
        <div class="navbar-fixed-top lead" style="position:fixed;">
    <ul class="nav nav-justified">
      <li class="nav-item"> 
          <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item"> 
          <a class="nav-link disabled" href="views/Servicos.php">Serviços</a>
      </li>
         <li class="nav-item">
             <a class="nav-link" href="views/Contato.php">Contato</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Galeria</a>
      </li>
       <li class="nav-item">
           <a class="nav-link" href="views/lista.php">Clientes</a>
      </li>
       <li class="nav-item">
           <a class="nav-link" href="logout.php">Sair</a>
      </li>
         <li class="nav-item">
             <a class="nav-link" href="views/Login.php"><?= (!empty($_SESSION['Login']) ? $_SESSION['Login']['login'] : "Login") ;?></a>
         </li>
          </ul>
              </div>
       
        <div class="img-fluid img-responsive">
            <img src="imagens/logomarca.png">
        </div>
                
           
</body>
</html>
