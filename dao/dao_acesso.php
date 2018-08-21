<?php
require_once 'dao_conexao2.php';
//require_once '../model/Acesso.php';
require_once'model/Acesso.php';

class AcessoDao{
	
	
	public function Adiciona($acesso){
		
		
		
		// exemplo de query para dar erro no commit
		$ex = "INSERT INTO cenarios(PORT_DESCRICAO,ING_DESCRICAO) values (oi)";
     $query = "INSERT INTO acessos (HORA_ACESSO,PAGINA,DATA_ACESSO) VALUES ('{$acesso->gethoraAcesso()}', '{$acesso->getPagina()}', '{$acesso->getdataAcesso()}')";    

    //  $result=  mysql_query($ex,$conn) or die (mysql_error($ex));		
	
	// Inicio da Transação
	/*
	$conn->beginTransaction();
		
		$resultado = $conn->query($query);
	if(!$resultado)	{
		die("<p>Erro do salvar o Cenário</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conn->commit();
	echo 'Lançamento efetuado com sucesso!';

	*/
	$database = new Database();
	$conn=$database->Conectar();
	$resultado = $conn->query($query);
	
	}
		
	}
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
