<!DOCTYPE html>

<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="UTF-8">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

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

  <?php
session_start();

require_once 'view_acesso_direto_administrador.php';

/*
if ( $_SESSION['tipo']!='administrador') {
    return header('Location: view_login.php');
}
 */
// evitar ocorrer o acesso direto 


  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>JOGO DE EMPRESA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button barra que diminui a tela-->
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            
            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                
              </li>
              <li class="footer">
                <a href="#"></a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
                            <?php
  
if(!empty($_SESSION['id'])){
  echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
  
}else{
  $_SESSION['msg'] = "Área restrita";
  header("Location: login.php");  
}
?>

              </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar.jpg" class="img-circle" alt="User Image">

                
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="sair.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button opção que vida do lado do login -->
		  
          <li>
            <a href="index.php">
			
			Home
			
			</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php
  

  
  if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if(isset($_POST['id'])){
	$id = $_POST['id'];
}

// PEGAR DADOS DO CENARIO DE ACORDO COM UM ID
  //include("../dao/dao_cenario.php");
  
 // $cenarioDao = new CenarioDao();
  //$dadosCenario = $cenarioDao->retornaCenario($id);
 
            //Recebe os dados a serem editados
           
            $nome = filter_input(INPUT_POST, 'nome');
           $senha = filter_input(INPUT_POST, 'senha');
		   $email = filter_input(INPUT_POST, 'email');
        

echo "<form class= form-horizontal method=post action=../ProfessorController.php?acao=manterProfessorEditar&id=".$id;
echo ">"

?>
<fieldset>
<br><br>
<div class="container">
<!-- Form Name -->
<legend>Editar Professor</legend>

</div>
<!-- Text input-->
<div class="form-group">


  <label class="col-md-4 control-label" for="idNomeCenario">Nome do Professor</label>  
  <div class="col-md-5">
  <input id="idNome" name="idNome" value = "<?php echo $nome ?>" type="text"  class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idCenario">Nome E-mail</label>  
  <div class="col-md-5">
  <input id="idEmail" name="idEmail" value = "<?php echo $email ?>" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idCenario">Senha</label>  
  <div class="col-md-5">
  <input id="idSenha" name="idSenha" value = "<?php echo $senha ?>" type="text" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
       <td colspan="2"><input type='submit'class="btn btn-primary"></td>
	<a href="javascript:window.history.go(-1)">
                    <button type="button" class="btn btn-danger">Voltar</button>
                </a>
  </div>
</div>

</fieldset>
</form>
</body>
</html>