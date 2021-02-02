<?php

$erro_usuario = isset($_GET["erro_usuario"]) ? $_GET["erro_usuario"] : 0;
$erro_email = isset($_GET["erro_email"]) ? $_GET["erro_email"] : 0;
$usuario_cadastrado = isset($_GET["usuario_cadastrado"]) ? $_GET["usuario_cadastrado"] : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Blog Footstar</title>

    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap -->
    <link href="bootstrap/scss/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="blog_estilo.css">



</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" id="menu_navegacao">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" id="menu_nav">
                <span class="sr-only">Alternar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><b id="blog_logo">Blog Footstar</b></h1>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><b>Página Inicial</b></a></li>
                <li><a href="login.php"><b>Entrar</b></a></li>';
            </ul>
        </div>
    </nav>

    <?php require_once("estilo_pagina/capa.php") ?>

    <section class="container">

        <br />

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Cadastre-se já.</h3>
            <br />
            <form method="post" action="registrar_usuario.php">
                <div class="form-group">
                    <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder="Nome e Sobrenome" required="requiored">
                    <br />
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">

                    <?php

                    if ($erro_usuario) {
                        echo "<font style='color:#FF0000'>Usuário já existe</font>";
                    }

                    ?>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">

                    <?php

                    if ($erro_email) {
                        echo "<font style='color:#FF0000'>Email já existe</font>";
                    }

                    ?>

                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
                </div>
                <button type="submit" class="btn btn-primary form-control" id="cadastrese">Cadastre-se</button>

                <?php

                if ($usuario_cadastrado) {
                    echo "<font style='color:green'>Usuário cadastrado com sucesso!</font>";
                }

                ?>
            </form>

        </div>
        <div class="col-md-4"></div>

        <div class="clearfix"></div>
        <br /><br />
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </section>


    <?php require_once("estilo_pagina/rodape.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>