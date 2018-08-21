<?php
 session_start();
 include_once 'model/Empresa.php';
 require_once 'view/view_acesso_direto_administrador.php';
 

  include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_empresa.php';
 //require_once 'view/view_pesquisa_cenario.php';
 
if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
}

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
}

if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if(isset($_POST['id'])){
	$id = $_POST['id'];
}
 
 if($acao =='manterEmpresa'){

	 $nome = addslashes($_POST['idNomeEmpresa']);
     $cenario = addslashes($_POST['idCenario']);
	   $empresa = addslashes($_POST['idEmpresa']);
	   
	 $empresaInt = (int) $empresa;
	 $empresa = new Empresa();
	 $empresa ->setNome($nome);
	 $empresa ->setEmpresa($empresaInt);
	 $empresa ->setCenario($cenario);
	 $database = new Database();
	 $conn = $database->Conectar();
	 $empresaDao = new EmpresaDao();
	 $empresaDao ->adiciona ($conn,$empresa);
	  header('Location:view/view_pesquisa_empresa.php');
	
 }
 
 if($acao=='excluir'){
	  $database = new Database();
	 $conn = $database->Conectar();
	 $empresaDao = new EmpresaDao();
	 $empresaDao ->removeEmpresa ($id);
	 	 header('Location:view/view_pesquisa_empresa.php');
	
	 
 }
 if($acao =='manterEmpresaEditar'){
	
	 
	 $nome = addslashes($_POST['idNomeEmpresa']);
			
    
			
	 $cenario = addslashes($_POST['idCenario']);
	   $empresa = addslashes($_POST['idEmpresa']);
	 $empresaInt = $empresa;
	  $empresaDao = new EmpresaDao();
	  
	 $empresaDao ->editarEmpresa($id,$nome,$cenario,$empresaInt);
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_empresa.php');
	
 }
 