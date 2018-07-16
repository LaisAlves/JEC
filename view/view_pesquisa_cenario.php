<!DOCTYPE html>

<html>
<head>

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
<script src="bower_components/jquery-sparkline/dist/jquery.sp">
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
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
                  <a href="../sair.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button opção que vida do lado do login -->
		  
          <li>
            <a href="../index.php">
			
			Home
			
			</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <br><br>	 
	<?php 
	
  require_once'../dao/dao_conexao.php';
  /*
 $conn = mysqli_connect('localhost','root', '', 'exemplo');
$query = "SELECT * FROM empresa";
$result = mysqli_query($conn, $query);

  */
$conn = conexao();
$query = "SELECT * FROM cenarios";
$result = mysqli_query($conn,$query);
 /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
echo"<div class=container>";
echo " <div class=row>";

echo "
<div class=col-md-12>
            <div class=panel panel-primary>
                <table class=table table-hover table-responsive>
                    <thead>
                    <tr>

                        <th>Nome Em Português</th>
                        <th>Descricao em Portugues</th>
						<th></th>
                       
                    </tr>
                    </thead>
                    <tbody>

" ;
//echo "<table><tr><td>Nome</td><td>Descrição</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_assoc($result)){

/*Escreve cada linha da tabela*/

echo "<tr><td>" . $escrever['PORT_DESCRICAO'] . "</td><td>" . $escrever['ING_DESCRICAO'] . "</td><td>";
echo "  <td><a href=../CenarioController.php?acao=editar&id=".$escrever['idCENARIOS']." class=btn btn-outline-success >Editar</a></td>
            <td><a  href =../CenarioController.php?acao=excluir&id=".$escrever['idCENARIOS']."   class= btn btn-outline-danger >Excluir</a></td>";

}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</div>";

echo "
</div>
        </div>
    </div>
</div>
";




?>
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
  <a href= "../manter_cenario.php" class="btn btn-primary"> Adicionar Cenario </a>
  <a href="javascript:window.history.go(-1)">
                    <button type="button" class="btn btn-danger">Voltar</button>
                </a>
       
	
  </div>
</div>
</div>
</body>
</html>

</html>