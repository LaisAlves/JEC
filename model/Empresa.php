<?php
class Empresa{
	private $nome;
	private $empresa;
	private $cenario;
	
	public  function getNome(){
		return $this ->nome;
	}
	
	public function setNome($nome){
		
		$this->nome = $nome;
	}
	
	public function getEmpresa(){
		return $this ->empresa;
	}
	
	public function setEmpresa($empresa){
		
		
		$this->empresa = $empresa;
	}
	
	
	public function getCenario(){
		return $this -> cenario;
	}
	
	public function setCenario($cenario){
		
		$this->cenario =$cenario;
	}
	
	
	
	
	
	
	
	
	
}




