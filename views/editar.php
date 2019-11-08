<?php
require_once "../classes/Conexao.php";

$codigo = $_GET['codigo'];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Cadastro de Clientes</title>
        <link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <style type="text/css">
            #tamanhoContainer{
                width: 400px;

            </style>
        </head>
        <body>
            <div class="navbar-fixed-top lead bg-info" style="position:fixed;">

                <ul class="nav nav-justified">
                    <li class="nav-item"> 
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                </ul>
            </div>

            <div class="container" id="tamanhoContainer" style="margin-top: 50px">
                    <h2 style="text-align:center">Atualizar Cliente</h2>
                    <form action="..classes/Atualizar.php" method="POST" style="margin-top:20px">

                    <?php
                    $sql = "SELECT * FROM cliente WHERE codCliente = {$codigo}";
                    $busca = mysqli_query($conexao,$sql);
                    
                    while($dados = mysqli_fetch_assoc($busca)){
        
                    ?>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>">
                                  <input type="hidden" class="form-control" name="codigo" value="<?= $dados['codCliente'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" value="<?= $dados['email'];?>" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefone:</label>
                                <input type="tel" class="form-control" name="telefone" value="<?= $dados['telefone']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Celular:</label>
                                <input type="tel" class="form-control" name="celular" value="<?= $dados['celular'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Login:</label>
                                <input type="text" class="form-control" name="login" value="<?= $dados['login'] ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Senha:</label>
                            <input type="password" class="form-control" name="senha" value="<?= $dados['senha'] ?>" disabled>
                        </div>
                        <div style="text-align:right;">
                <button type="submit" class="btn btn-primary" name="cadastrar" id="btnEntrar">Atualizar</button>
                        <button type="reset" class="btn btn-danger" id="btnEntrar">Limpar</button>
                    </div>
                    <?php } ?>
                </form>
                    <a href="Login.php" class="btn btn-primary">Clique Para Fazer Login</a>
            </div>
            
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

        </body>
    </html>
