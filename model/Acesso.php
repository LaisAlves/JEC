<?php
class Acesso{
	private $dataAcesso;
	private $horaAcesso;
	private $pagina;
	// futuramente é o id da equipe;
	private $idUsuario;
	
	

	
	public function getdataAcesso(){
		return $this->dataAcesso;
	}
	
	
	
	public function gethoraAcesso(){
		return $this->horaAcesso;
	}
	
	public function getPagina(){
		return $this->pagina;
		
	}
	public function setPagina($NumPagina){
		date_default_timezone_set('America/Sao_Paulo');
		$this->pagina = $NumPagina;
		$this->dataAcesso = date('d-m-Y');
		$this->horaAcesso = '2569';
		
		
	}

	
public function getId(){
		return $this->idUsuario;
		
	}
	
public function setId($id){
		$this->idUsuario = $id;
		
	}	
	
	
	
	
	
	
	
}




