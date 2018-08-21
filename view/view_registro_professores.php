
<!DOCTYPE html>
<html lang="en">
<?php
require_once("view_acesso_direto_administrador");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registrar</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Link da Tradução Dos Idiomas Ingles/Portugues API GOOGLE-->
		<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', includedLanguages: 'en,es,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<script type="text/javascript" src="http://cdn.howcode.org/content/static/javascript/jquery.min.js"></script>
		<script src="http://cdn.howcode.org/content/static/javascript/jquery.cookie.js"></script>	
 <style type="text/css">
 .goog-te-banner-frame.skiptranslate{display:none!important;}body{top:0px!important;}
 
 </style>
  <!-- Custom styles for this template-->
</head>

<body class="bg-dark">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href=" view_index.php">Jogos de Empresa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="view_administrador.php"> Voltar ao Painel de Controle
                <span class="sr-only">(current)</span>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <br>    <br>
    
 <div class="container">

            <div class="card card-register mx-auto mt-5">
      <div class="card-header">Cadastrar Professores</div>
      <div class="card-body">
          
          <form action="ManterAtletaController?acao=confirmarIncluir" method="post" name="frmManterAtleta"/>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Nome Completo:</label>
                            <input type="text" required name="txtNomeAtleta" class="form-control">
                        </div>

                       
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">CPF:</label>
                            <input type="text" required name="txtCpf" class="form-control">
                        </div>

                        <div class="col-md-2">

                            <label for="exampleInputPassword1">Sexo:</label>
                            <select class="form-control" name="optSexo" >
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino" >Feminino</option>
                            </select>

                        </div>

                        <div class="col-md-2">
                            <label for="exampleInputPassword1">Data de Nascimento:</label>
                            <input type="text" required name="txtDataNascimento" class="form-control">
                        </div>



                        
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Cidade:</label>
                            <input type="text" required name="txtCidadeAtleta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Estado:</label>
                            <input type="text" required name="txtEstadoAtleta" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Endereço:</label>
                            <input type="text" required name="txtRuaAtleta" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Bairro:</label>
                            <input type="text" required name="txtBairroAtleta" class="form-control" >
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="exampleInputPassword1">Telefone Fixo:</label>
                            <input type="text" name="txtTelefoneFixo" class="form-control" >
                        </div>
                        <div class="col-md-2">
                            <label for="exampleInputPassword1">Telefone Celular:</label>
                            <input type="text" name="txtTelefoneCelular" class="form-control" >
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="text" required name="txtEmail" class="form-control" >
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Confirmar Email:</label>
                            <input type="text" required id="email" name="txtEmail" class="form-control" oninput="validaEmail(this)">
                        </div>


                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Login:</label>
                            <input type="text" required name="txtLoginAtleta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Senha:</label>
                            <input type="password" required id="senha" name="txtSenhaAtleta" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputPassword1">Confirmar Senha:</label>
                            <input type="password" required name="txtValidadaSenha" class="form-control" oninput="validaSenha(this)">
                        <br> <br>
                        </div>
                        
                        
                      <button type="submit" class="btn btn-primary btn-block">Registrar</button>

        </form>
        
          
           
      </div>
    
      
     
     </div>
  </div>
 </div>
    
    <br><br> <br>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
