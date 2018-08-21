<?php
session_start();
 include_once 'model/Professor.php';
 require_once 'view/view_acesso_direto_administrador.php';
 

  include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_professor.php';
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
 if($acao =='manterProfessor'){

	  $nome =addslashes( $_POST['idNome']);
     $email = addslashes($_POST['idEmail']);
	 $senha = addslashes($_POST['idSenha']);

	 $professor = new Professor();
	 $professor ->setNome($nome);
	 $professor ->setEmail($email);
    $professor ->setSenha($senha);

	 $database = new Database();
	 $conn = $database->Conectar();
	 $professorDao = new ProfessorDao();
	 $professorDao ->adiciona ($conn,$professor);
	 
include_once"phpmailer/class.phpmailer.php";
define('GUSER', 'laisalvesjf7@gmail.com'); // GMail username
define('GPWD', '32213864'); // GMail password 	 
	// header('Location:view/view_pesquisa_professor.php');
	
	
	function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'tsl/smtp.gmail.com';
	$mail->Port = 587; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}
	$too ="laisalvesjf@hotmail.com";
	$from="laisalvesjf7@gmail.com";
	$name="Lais Alves";
	$assunto="kkk";
	$corpo="kkk";
	
	if (smtpmailer('laisalvesjf7@gmail.com', $too, $name, $assunto, $corpo)) {

	header('Location:view/view_pesquisa_professor.php');
	

}
if (!empty($error)) echo $error;

	
	
	
	
 }
 
  if($acao=='excluir'){
	  $database = new Database();
	 $conn = $database->Conectar();
	 $professorDao = new ProfessorDao();
	 $professorDao ->removeProfessor ($id);
	 	 header('Location:view/view_pesquisa_professor.php');
	
	 
 }
 
 if($acao =='manterProfessorEditar'){
	//$cenarios = null;
	 $nome = addslashes($_POST['idNome']);
     $email = addslashes($_POST['idEmail']);
	      $senha = addslashes($_POST['idSenha']);
	 
	  $professorDao = new ProfessorDao();
	  
	 $professorDao ->editarProfessor ($id,$nome,$email,$senha);
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_professor.php');
	
 }
 