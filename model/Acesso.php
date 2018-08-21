<?php
class Acesso{
	private $dataAcesso;
	private $horaAcesso;
	private $pagina;
	// futuramente é o id da equipe;
	private $idUsuario;
	// futuramente colocar no construtor o id da equipe;
function __construct($pagina){
	date_default_timezone_set('America/Sao_Paulo');
$this->pagina = $pagina;
$this->horaAcesso = date("H:i:s");
$this->dataAcesso =   date("d/m/Y");
$dataFormatada = $this->formatarData($this->dataAcesso);
$this->dataAcesso = $dataFormatada;

}	

	
	public function getdataAcesso(){
		return $this->dataAcesso;
	}
	
	
	
	public function gethoraAcesso(){
		return $this->horaAcesso;
	}
	
	public function getPagina(){
		return $this->pagina;
		
	}
	

	
public function getId(){
		return $this->idUsuario;
		
	}
	
public function setId($id){
		$this->idUsuario = $id;
		
	}	
	
	
	function formatarData($data){
     // $rData = implode("-", array_reverse(explode("/", trim($data))));
	 $data = implode("-",array_reverse(explode("/",$data)));
      return $data;
	  
   }
	
	
	
	
}




