<?php
    session_start();
    ob_start();
if(!empty($_SESSION['Login'])){
    header("Location: ../index.php");
    exit();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Cadastro de Clientes</title>
        <link  href="../bootstrap/css/bootstrap.min.css"rel="stylesheet">
  <style type="text/css">
            #tamanhoContainer{
                width: 400px;

            </style>
    </head>
    <body>
         <div class="navbar-fixed-top lead bg-info"style="position:fixed;">

                <ul class="nav nav-justified">
                    <li class="nav-item"> 
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                </ul>
            </div>

        <div class="container" id="tamanhoContainer" style="margin-top: 50px">
            <h2 style="text-align:center">Autenticação</h2>

            <form name="formLogin" action="../  classes/DadosLogin.php" method="POST" style="margin-top:20px">
                <div class="alert hidden"></div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Login:</label>
                        <input type="text" class="form-control" name="login" id="login" required autofocus placeholder="Informe seu Login">
                    </div>
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="senha" id="senha" required placeholder="Informe sua senha">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="btnEntrar">Entrar</button><br/><p style="color: red;"><b>Não Tem Cadastro?</b></p>
                </div>
                <h4><a href="Formulario.php">Clique Para Cadastrar</a></h4>

            </form> 
        </div>

        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
            $('form[name="formLogin"]').submit(function(e){
                e.preventDefault();
                var form = this;

                $.ajax({
                    url: "../classes/DadosLogin.php",
                    type: "POST",
                    data: $(form).serialize(),
                    dataType: "json",
                    beforeSend: function(){
                        $(form).find('.alert').removeClass('hidden').addClass('alert-success').html('Efetuando Login...');
                    },
                    success: function(response){
                        if(response.type === "success"){
                            window.location.href = "../index.php";
                        }else{
                            $(form).find('.alert').removeClass('alert-success').addClass('alert-danger').html(response.msg);                             
                        }
                    },
                    error: function(res){
                        $(form).find('.alert').removeClass('alert-success').addClass('alert-danger').html('Ocorreu um erro ao efetuar login!');                        
                    }
                });
            });
        </script>
    </body>
</html>
