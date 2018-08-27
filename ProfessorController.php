<?php
session_start();
 include_once 'model/Professor.php';
 require_once 'view/view_acesso_direto_administrador.php';
 
 
include_once"phpmailer/class.phpmailer.php";
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
     $emailProfessor = addslashes($_POST['idEmail']);
	 
	 $numero_de_bytes = 3;

$restultado_bytes = random_bytes($numero_de_bytes);
$resultado_final = bin2hex($restultado_bytes);
	 
	 $senhaProfessor = gerar_senha(5, true, true, true, true);

	 $professor = new Professor();
	 $professor ->setNome($nome);
	 $professor ->setEmail($emailProfessor);
    $professor ->setSenha($senhaProfessor);

	 $database = new Database();
	 $conn = $database->Conectar();
	 $professorDao = new ProfessorDao();
	 $professorDao ->adiciona ($conn,$professor);
	$mail = new PHPMailer();

/* #########################
 * # CONFIGURAÇÕES BÁSICAS # 
 * #########################
 */
$assunto = 'EQUIPE JEC: NOVA CONTA DE USUÁRIO';

// Monta o corpo da mensagem com os campos
$mensagem = "<html><body>

<meta charset=UTF8>";
$mensagem .= "<h4>Olá $nome</h4>\n ";
$mensagem.="<p>Uma nova conta foi criada para você em  'Jogos de Empresas (JEC)' e
recebeu uma senha provisória</p>\n";
$mensagem .= "Usuário: $emailProfessor <br> Senha: $senhaProfessor <br><br>";
$mensagem.="Atenciosamente Equipe JEC";
$mensagem .= "</body></html>";

//$mensagem = 'A MENSAGEM DO EMAIL. PODE SER HTML.';
$seu_email = 'projetojecif@gmail.com';
$seu_nome = 'Equipe JEC';
$sua_senha = 'projetojec2018if';

/* Se for do Gmail o servidor é: smtp.gmail.com */
$host_do_email = 'smtp.gmail.com';
$mail=null;
/* Configura os destinatários (pra quem vai o email) */
$mail = new PHPMailer();
$mail->AddAddress($emailProfessor,"Olá");
// $mail->AddAddress('email@email.com');
// $mail->AddCC('email@email.com', 'Nome da pessoa'); // Copia
// $mail->AddBCC('email@email.com', 'Nome da pessoa'); // Cópia Oculta

/* ###########################
 * # CONFIGURAÇÕES AVANÇADAS # 
 * ###########################
 */
				
/* Define que é uma conexão SMTP */
$mail->IsSMTP();
/* Define o endereço do servidor de envio */
$mail->Host = $host_do_email;
/* Utilizar autenticação SMTP */ 
$mail->SMTPAuth = true;
/* Protocolo da conexão */
$mail->SMTPSecure = "ssl";
/* Porta da conexão */
$mail->Port = "465";
/* Email ou usuário para autenticação */
$mail->Username = $seu_email;
/* Senha do usuário */
$mail->Password = $sua_senha;

/* Configura os dados do remetente do email */
$mail->From = $seu_email; // Seu e-mail
$mail->FromName = $seu_nome; // Seu nome

/* Configura a mensagem */
$mail->IsHTML(true); // Configura um e-mail em HTML

/*   
 * Se tiver problemas com acentos, modifique o charset
 * para ISO-8859-1  
 */
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

/* Configura o texto e assunto */
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $mensagem; // A mensagem em HTML
$mail->AltBody = trim(strip_tags($mensagem)); // A mesma mensagem em texto puro

/* Configura o anexo a ser enviado (se tiver um) */
//$mail->AddAttachment("foto.jpg", "foto.jpg");  // Insere um anexo

/* Envia o email */
$email_enviado = $mail->Send();

/* Limpa tudo */
$mail->ClearAllRecipients();
$mail->ClearAttachments();

/* Mostra se o email foi enviado ou não */
/*
if ($email_enviado) {
	echo "Email enviado!";
} else {
	echo "Não foi possível enviar o e-mail.<br /><br />";
	echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}
*/
 header('Location:view/view_pesquisa_professor.php');
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
 
 function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
  $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
  $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
  $nu = "0123456789"; // $nu contem os números
  $si = "!@#$%¨&*()_+="; // $si contem os símbolos
 
  if ($maiusculas){
        // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);
  }
 
    if ($minusculas){
        // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);
    }
 
    if ($numeros){
        // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);
    }
 
    if ($simbolos){
        // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($si);
    }
 
    // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
    return substr(str_shuffle($senha),0,$tamanho);
}
 