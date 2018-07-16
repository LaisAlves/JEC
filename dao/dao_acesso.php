<?php
require_once 'dao/dao_conexao2.php';
require_once 'model/Acesso.php';

class AcessoDao{
	
	
	public function Adiciona($pagina,$id){
		$database = new Database();
		$conexao=$database->Conectar();
		/*
		$idUser = $id;
		$hora =date('H:i:s');
		$data = date('d-m-Y');
		$this->horaAcesso = $hora;
		$this->dataAcesso = $data;
		$this->idUsuario = $id;
		$this->pagina= $pagina;
		
		
		*/
		//$data = "ooi";
		//$hora = "ooi";
		//$date = date('d/m/y');
		$date = "ooo";
		//$data = date('d-m-Y');
		$hora = "111";
		$page = "11";
		$md="1";
		//$query = "INSERT INTO acessos (DATA_ACESSO,HORA_ACESSO,PAGINA,EQUIPES_idEQUIPES) VALUES ('{$acesso->getdataAcesso()}', '{$acesso->gethoraAcesso()}','{$acesso->getPagina()}','{$acesso->getId()}')";    
			//$ex = "INSERT INTO cenarios(PORT_DESCRICAO,ING_DESCRICAO) values (oi,oi)";
			// OOK $ex = "INSERT INTO cenarios(PORT_DESCRICAO,ING_DESCRICAO) VALUES('".$data."', '".$hora."')";
		//$ex = "INSERT INTO tipo_empresa(PORT_NOME,PORT_DESCRICAO,ING_NOME,ING_DESCRICAO) values (oi,kk,66,66)";
		$query = "INSERT INTO acessos (DATA_ACESSO,HORA_ACESSO,PAGINA,EQUIPES_idEQUIPES) VALUES ('".$date."' '".$hora."','".$page."','".$md."')";
		//$query "INSERT INTO acessos (DATA_ACESSO,HORA_ACESSO,PAGINA,EQUIPES_idEQUIPES) VALUES ('{$date}','{$hora}','{$page}','{$md}')";
		
		
		$resultado = $conexao->query($query);
		
	}
	

		
	
		
		
	}
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
