<?php
 include_once 'model/Empresa.php';
 session_start();
  include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_empresa.php';
 
if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
}

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
}
 
 if($acao =='manterEmpresa'){

	 $nome = $_POST['idNomeEmpresa'];
     $descricao = $_POST['idDescricao'];
	 
	 $empresa = new Empresa($nome,$descricao);
	 $empresa ->setNome($nome);
	 $empresa ->setDescricao($descricao);
	 $database = new Database();
	 $conn = $database->Conectar();
	 $empresaDao = new EmpresaDao();
	 $empresaDao ->adiciona ($conn,$empresa);
	
 }
 