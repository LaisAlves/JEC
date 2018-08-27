<?php
session_start();
 include_once 'dao/dao_conexao.php';
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$usuario_administrador = "SELECT idADMINISTRADORES,NOME,EMAIL,LOGIN FROM administradores";
		$result_usuario = "SELECT id, nome, email, tipo,senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		$tipo ="SELECT tipo from usuarios WHERE usuario='$usuario'";
		$usuario_nome="SELECT usuario from usuarios WHERE usuario='$usuario'";
		$resultado_tipo = mysqli_query($conn,$tipo);
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado_administrador = mysqli_query($conn, $usuario_administrador);
		if($resultado_administrador){
			$row_usuario = mysqli_fetch_assoc($usuario_administrador);
			
			if(password_verify($senha,$row_usuario['SENHA'])&& $row_usuario['LOGIN'] ==$usuario){
				$_SESSION['id'] = $row_usuario['idADMINISTRADORES'];
				$_SESSION['nome'] = $row_usuario['NOME'];
				$_SESSION['email'] = $row_usuario['EMAIL'];
				$_SESSION['logado'] = '1';
				// importante para tratar e evitar acesso direto.
				//$_SESSION['tipo'] = $row_usuario['tipo'];
				
				header("Location: administrador.php");
				die;
			}
		}
		
		
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
		
			if(password_verify($senha,$row_usuario['senha'])&& $row_usuario['tipo'] =="administrador"){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				$_SESSION['logado'] = '1';
				// importante para tratar e evitar acesso direto.
				$_SESSION['tipo'] = $row_usuario['tipo'];
				
				header("Location: administrador.php");
				die;
			}
			 if(password_verify($senha, $row_usuario['senha'])&&  $row_usuario['tipo'] =="aluno" ){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				$_SESSION['logado'] = '1';
				
				$_SESSION['tipo'] =$row_usuario['tipo'];
				header("Location: aluno.php");
				die;
			}
			else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login.php");
}
