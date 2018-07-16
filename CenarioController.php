<?php
session_start();
 include_once 'model/Cenario.php';
 require_once 'view/view_acesso_direto_administrador.php';
 

  include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_cenario.php';
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
 
 if($acao =='manterCenario'){
	//$cenarios = null;
	 $nomePort = $_POST['cenarioPort'];
     $nomeIng = $_POST['cenarioIng'];
	 
	 $cenario = new Cenario($nomePort,$nomeIng);
	 $cenario ->setNomePort($nomePort);
	 $cenario ->setNomeIng($nomeIng);
	 $database = new Database();
	 $conn = $database->Conectar();
	 $cenarioDao = new CenarioDao();
	$mensagem= $cenarioDao ->adiciona ($conn,$cenario);
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_cenario.php');
	
 }
 if($acao=='excluir'){
	  $database = new Database();
	 $conn = $database->Conectar();
	 $cenarioDao = new CenarioDao();
	 $cenarioDao ->removeCenario ($id);
	 	 header('Location:view/view_pesquisa_cenario.php');
	
	 
 }
  if($acao=='editar'){
	  $database = new Database();

	 	 header("Location:view/view_editar_cenario.php?id=".$id);
	
	 
 }
 if($acao =='manterCenarioEditar'){
	//$cenarios = null;
	 $nomePort = $_POST['cenarioPort'];
     $nomeIngl = $_POST['cenarioIng'];
	 
	  $cenarioDao = new CenarioDao();
	  $ex= '16';
	 $cenarioDao ->editarTipo ($id,$nomePort,$nomeIngl);
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_cenario.php');
	
 }
 