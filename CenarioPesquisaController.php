<?php
 include_once 'model/Cenario.php';
 
session_start();
  include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_cenario.php';
 //require_once 'view/view_pesquisa_cenario.php';
 
if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
}

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
}
 
 if($acao =='pesquisaCenario'){
	//$cenarios = null;
	
	 
	 $database = new Database();
	 $conn = $database->Conectar();
	 $cenarioDao = new CenarioDao();
	

	
	$cenarios = $cenarioDao ->listaCenarios();
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_cenario.php');
	
 }
 