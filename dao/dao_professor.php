<?php
require_once 'dao/dao_conexao2.php';
require_once 'model/Empresa.php';

class ProfessorDao{
	
	function adiciona($conn,$professor){
		
$query = "INSERT INTO professor (nome,usuario,senha,nivel) VALUES ('{$professor->getNome()}', '{$professor->getUsuario()}','{$professor->getSenha()}','{$professor->getNivel()}')";    
    //  $result=  mysql_query($ex,$conn) or die (mysql_error($ex));		
		
		$conn->query($query);
		
	}
	
	
	
	
}



