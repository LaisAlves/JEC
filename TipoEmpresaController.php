<?php
 include_once 'model/TipoEmpresa.php';
 
session_start();
  include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_tipo_empresa.php';
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
 
 if($acao =='manterTipoEmpresa'){
	//$cenarios = null;
	 $nomePort = addslashes($_POST['idNomePort']);
     $nomeIng = addslashes($_POST['idNomeIng']);
	 
	 $descricaoPort = addslashes($_POST['idDescricaoPort']);
     $descricaoIng = addslashes($_POST['idDescricaoIng']);
	 
	 $tipoEmpresa = new TipoEmpresa($nomePort,$nomeIng);
	 $tipoEmpresa ->setNomePort($nomePort);
	 $tipoEmpresa ->setNomeIng($nomeIng);
	 
	 $tipoEmpresa ->setDescricaoPort($descricaoPort);
	 $tipoEmpresa ->setDescricaoIng($descricaoIng);
	 
	 $database = new Database();
	 $conn = $database->Conectar();
	 $tipoEmpresaDao = new tipoEmpresaDao();
	 $tipoEmpresaDao ->adiciona ($conn,$tipoEmpresa);
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_tipo_empresa.php');
	
 }
 if($acao=='excluir'){
	  $database = new Database();
	 $conn = $database->Conectar();
	 $tipoEmpresaDao = new tipoEmpresaDao();
	 $tipoEmpresaDao ->removeTipo($id);
	 	 header('Location:view/view_pesquisa_tipo_empresa.php');
	
	 
 }
 if($acao=='editar'){
	  $database = new Database();

	 	 header("Location:view/view_editar_tipo_empresa.php?id=".$id);
	
	 
 }
 if($acao =='manterTipoEmpresaEditar'){
	//$cenarios = null;
	//addslashes -> Tratamento de Strings em PHP
	 $nomePort = addslashes($_POST['idNomePort']);
     $nomeIngl = addslashes($_POST['idNomeIng']);
	 $descricaoPort=addslashes($_POST['idDescricaoPort']);
	 	 $descricaoIng= addslashes($_POST['idDescricaoIng']);
	 
	  $TipoEmpresaDao = new TipoEmpresaDao();
	  $ex= '16';
	 $TipoEmpresaDao ->editarTipo ($id,$nomePort,$nomeIngl,$descricaoPort,$descricaoIng);
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_tipo_empresa.php');
	
 }
 