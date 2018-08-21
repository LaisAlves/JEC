
<!DOCTYPE html>
<html>

  <head>
  <style type="text/css">
#google_translate_element {
    display: none;
}
.goog-te-banner-frame {
    display: none !important;
}
body {
    position: static !important;
    top: 0 !important;
}
</style> 
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<script type="text/javascript" src="http://cdn.howcode.org/content/static/javascript/jquery.min.js"></script>
    <script src="http://cdn.howcode.org/content/static/javascript/jquery.cookie.js"></script>	
 <style type="text/css">
 .goog-te-banner-frame.skiptranslate{display:none!important;}body{top:0px!important;}
 
 </style>
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
	<br>
<div id="google_translate_element" class="boxTradutor"></div>
    <!-- &nbsp;  usado para dar espaços  -->

    <a href="javascript:trocarIdioma('pt')"><font color="#000000">PT&nbsp;<img alt="portgues" src="view/img/portugues.png"></font></a>&nbsp;&nbsp;
	
  <a href="javascript:trocarIdioma('en')"> <font color="#000000"> EN&nbsp;<img alt="ingles" src="view/img/english.png"></font></a>



    <!-- O Javascript deve vir depois -->

    <script type="text/javascript">
    var comboGoogleTradutor = null; //Varialvel global

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'pt',
            includedLanguages: 'en,es,pt',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');

        comboGoogleTradutor = document.getElementById("google_translate_element").querySelector(".goog-te-combo");
    }

    function changeEvent(el) {
        if (el.fireEvent) {
            el.fireEvent('onchange');
        } else {
            var evObj = document.createEvent("HTMLEvents");

            evObj.initEvent("change", false, true);
            el.dispatchEvent(evObj);
        }
    }

    function trocarIdioma(sigla) {
        if (comboGoogleTradutor) {
            comboGoogleTradutor.value = sigla;
            changeEvent(comboGoogleTradutor);//Dispara a troca
        }
    }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      
     <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Bem-Vindo ao JEC</h1>
        <p class="lead">Um jogo que levará você além da sala de aula</p>
        <a href="#" class="btn btn-primary btn-lg">Registrar-se</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Jogo1</h4>
              <p class="card-text">Pequena descrição do jogo</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Mais Informações</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Jogo2</h4>
              <p class="card-text">Pequena Descrição do Jogo</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Mais Informações</a>
            </div>
          </div>
        </div>

        

       

      </div>
      <!-- /.row -->

    </div>
	</div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018  Instituto Federal do Sudeste de Minas Gerais- Campus Juiz de Fora</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>


