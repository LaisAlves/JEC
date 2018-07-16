<?php
require_once 'dao/dao_conexao2.php';
require_once 'model/Empresa.php';

class EmpresaDao{
	
	function adiciona($conn,$empresa){
		
$query = "INSERT INTO empresa (nome, descricao) VALUES ('{$empresa->getNome()}', '{$empresa->getDescricao()}')";    
    //  $result=  mysql_query($ex,$conn) or die (mysql_error($ex));		
		
		$conn->query($query);
		
	}
	
	
	
	
}



