
<!DOCTYPE html>

<html lang="pt-br">

    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>JEC</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">

    </head>

    <body class="bg-dark">

	<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.php">Jogos de Empresa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <br>    <br>

        <div class="container">
            <div class="card card-login mx-auto mt-5 col-sm-4">
                <div class="alert alert-danger alert-dismissable">
                    <strong> </strong>
                </div>

        <div class="card-header">Área de cadastro</div>
            <div class="card-body">
                <form name = "signup" method="POST" action="efetuar_cadastro_variaveis.php?idioma= $_GET['idioma']">
            <div class="form-group">
                <label>Tipo de Variável</label><br>
                    <input type="radio" name="tipo" value="Interna"/>Interna<br>
                    <input type="radio" name="tipo" value="Externa"/>Externa<br>
            </div>
            <div class="form-group">
                <label>Nome em português</label><br>
                    <input class="form-control" type="text" name="port_nome" placeholder="Digite o nome da variável em português"/>
            </div>
            <div class="form-group">
                <label>Nome em inglês</label><br>
                    <input class="form-control" type="text" name="ing_nome" placeholder="Digite o nome da variável em inglês"/>
            </div>
            <div class="form-group">
                <label>Visibilidade</label><br>
                    <input type="radio" name="visibilidade" value="Visivel"/>Sim<br>
                    <input type="radio" name="visibilidade" value="Invisivel"/>Não<br>
            </div>
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Cadastrar"/>
        </form>

                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>

</html>
