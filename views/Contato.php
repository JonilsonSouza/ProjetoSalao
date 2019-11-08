<!DOCTYPE html>
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
            <div class="navbar navbar-fixed-top"style="position:fixed;">

                <ul class=" nav nav-justified lead">
                    <li class="nav-item"> 
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                </ul>
            </div>

            <div class="container" id="tamanhoContainer" style="margin-top: 50px">
                    <h2 style="text-align:center"><b>Deixe seu contato que retornaremos em breve</b></h2>
                    <form action="DadosContato.php" method="POST"style="margin-top:20px">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome*">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <label>Telefone:</label>
                                <input type="tel" class="form-control" name="telefone"placeholder="Telefone*">
                            </div>
                            <div class="form-group">
                                <label>Assunto:</label>
                                <input type="tel" class="form-control" name="assunto" placeholder="Assunto*">
                            </div>
                            <div class="form-group">
                                <label>Mensagem:</label>
                                <textarea class="form-control" name="mensagem" placeholder="Mensagem*" ></textarea>
                        </div>
                        <div style="text-align:right;">
                        <button type="submit" class="btn btn-primary" id="btnEntrar">ENVIAR MENSAGEM</button>
                    </div>
                </form>
</div>
            </div>
                       
            <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

        </body>
    </html>
