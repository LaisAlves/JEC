<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "mydb";
	
	//Criar a conexao
	 $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	function conecta()
  { 

    /*
      *Variáveis par conectar ao banco de dados
      *Xampp e Wampp geralmente a variável password será vazia ''
      *PDO é a forma de conexão com o banco de dados utilizada
    */
	/*
    $servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "exemplo";
    return new PDO("mysql:host=$servidor;dbname=$dbname",$usuario,$senha);
	*/
	return $conn;
  }
  
   function conexao(){
   $servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "mydb";
	  $con = null;
	  $con = mysqli_connect($servidor, $usuario, $senha, $dbname);
	  
	  return $con;
  }