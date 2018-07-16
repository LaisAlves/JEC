<?php
 include_once 'model/Professor.php';
 session_start();
  include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_professor.php';
 
if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
}

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
}
 
 if($acao =='manterProfessor'){

	 $nome = $_POST['idNome'];
     $usuario = $_POST['idUsuario'];
	 $senha = $_POST['idSenha'];
	 $nivel = $_POST['idTipo'];
	 
	 $professor = new Professor($nome,$usuario,$senha,$nivel);
	 $professor ->setNome($nome);
	 $professor ->setUsuario($usuario);
	 	 $professor ->setSenha($senha);
		 	 $professor ->setNivel($nivel);
	 $database = new Database();
	 $conn = $database->Conectar();
	 $professorDao = new ProfessorDao();
	 $professorDao ->adiciona ($conn,$professor);
	
 }
 