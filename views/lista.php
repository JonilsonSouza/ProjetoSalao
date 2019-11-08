<?php
 require_once '../classes/Conexao.php';

 $consulta = mysqli_query($conexao, "SELECT * FROM cliente order by nome asc");

 $consultamsg = mysqli_query($conexao, "SELECT * FROM contatocliente order by nome asc");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Cadastro de Clientes</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <style type="text/css">
            #tamanhoContainer{width: 800px;}
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
                <h2 style="text-align:center">Lista de Cliente</h2>

            <div class="pull-right">
                <a href="Formulario.php" class="btn btn-primary"> Novo Cliente</a>
            </div>         
                <table class="table ">
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Login</th>
                        <th>Ação</th>
                    </tr>
                    <?php
                    while($dados = mysqli_fetch_assoc($consulta)){
                    ?>
                    <tr>
                        <td><?= $dados['codCliente'] ?></td>
                        <td><?= $dados['nome'] ?></td>
                        <td><?= $dados['email'] ?></td>
                        <td><?= $dados['telefone'] ?></td>
                        <td><?= $dados['celular'] ?></td>
                        <td><?= $dados['login'] ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="editar.php?codigo=<?= $dados['codCliente']?>" role="button" >Editar</a>
                            <a class="btn btn-danger btn-sm" href="deletar.php?codigo=<?= $dados['codCliente']?>" role="button" >Excluir</a>
                        </td>       
                    </tr>
                    <?php   } ?>
                </table>
                <br/>
                <br/>
                   <h2 style="text-align:center">Lista de Mensagens de Cliente</h2>
                           
                <table class="table ">
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Assunto</th>
                        <th>Mensagem</th>
                    </tr>
                    <?php
                    while($dados = mysqli_fetch_assoc($consultamsg)){
                    ?>
                    <tr>
                        <td><?= $dados['CodContatoCliente'] ?></td>
                        <td><?= $dados['nome'] ?></td>
                        <td><?= $dados['email'] ?></td>
                        <td><?= $dados['telefone'] ?></td>
                        <td><?= $dados['assunto'] ?></td>
                        <td><?= $dados['mensagem'] ?></td>       
                    </tr>
                    <?php   } ?>
                </table>

                </div>  
            </div>

    </body>
</html>