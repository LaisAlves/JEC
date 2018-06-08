
<!DOCTYPE html>
<html>

  <head>
<?php




  ?>
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JEC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="PesquisaProvaController?acao=gridProvas">Jogos de Empresa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="
			  <?php
chdir('/var/www/');
echo realpath('./../../view/view_index.php');
?>
			  
			 ">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
            </li>
            
            


             <?php
  
  
  
if(!empty($_SESSION['id']) && $_SESSION['tipo']= 'administrador'){?>
<li class="nav-item">
<a class="nav-link" href="administrador.php">
	<?php
	 echo "Olá ".$_SESSION['nome']." <br>";
	 
	?>
</a>
</li>

 <?php
}
 else{
	
       
 ?> 
 
 <li class="nav-item">
										 <!-- view/view_login.php -->
              <a class="nav-link" href="login.php">
			 	
			  <span class="glyphicon glyphicon-user"></span> Entrar </li></a>
			  
			  <li class="nav-item">
              <a class="nav-link" href="registro.jsp"> <span class="glyphicon glyphicon-user"></span> Registrar-se</a>
            </li>
 
  <?php
 }
 
 ?>

            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Bem Vindo!</h1>
        <p class="lead">JEC</p>
        <a href="registro.jsp" class="btn btn-primary btn-lg">
   

        Registrar</a> <br>
		 
      </header>

      <!-- Page Features -->
      <div class="row text-center">

          
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <p class="card-text"> <br>  </p>
            </div>
            <div class="card-footer">
              <a class="btn btn-success" href="PesquisaProvaController?acao=visualizarProva&id=${prova.id}" >Mais informações</a>
          </div>
        </div>
          
        </div>
        
      </div>
	  
	    
      <!-- /.row -->

    </div>
	<!-- imagem grafico exemplo 
	<div class="container">
	<fieldset>
                 <img src="model/model_grafico_usuario.php" alt="Índice de Fecundidade Brasileira 1940-2000" title="Índice de Fecundidade Brasileira 1940-2000" />
             </fieldset>  
	 Dados do gráfico extraidos do <a href="http://www.ibge.gov.br/ibgeteen/pesquisas/fecundidade.html">site IBGE</
	 </div>
	 -->
    <!-- /.container -->

    <!-- Footer -->
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1.0
    </div>
    <strong>Copyright &copy; 2018  Instituto Federal do Sudeste de Minas Gerais- Campus Juiz de Fora </strong> Todos os direitos reservados
    
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


