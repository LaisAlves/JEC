<?php
require_once 'dao_conexao.php';

function lista_usuarios{
	 $conexao = conecta();
    $sql = "SELECT nome,email from usuarios";
	/*
    $stmp = $conexao->prepare($sql);
    $stmp->execute();
    $dados = $stmp->fetchAll();
	*/
	mysql_fetch_array
	/*
	 while($obj = $stmp->fetch_object()){
	$values[] = array($obj->nome, $obj->email);
	*/
	$res = mysql_query("SELECT nome,email from usuarios"); 
	$escrever=mysql_fetch_array($res);
 }

 
    return $escrever;
	
	

}





