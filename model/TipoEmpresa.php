<?php
class TipoEmpresa{
	private $nomePort;
	private $descricaoPort;
	private $nomeIng;
	private $descricaoIng;
	
	public function getNomePort(){
		return $this ->nomePort;
	}
	
	public function setNomePort($nome){
		
		$this->nomePort = $nome;
	}
	
		public function getDescricaoPort(){
		return $this ->descricaoPort;
	}
	
	public function setDescricaoPort($descricao){
		
		$this->descricaoPort = $descricao;
	}
	
	
	public function getNomeIng(){
		return $this ->nomeIng;
	}
	
	public function setNomeIng($nomeIng){
		
		$this->nomeIng = $nomeIng;
	}
	
	public function getDescricaoIng(){
		return $this ->descricaoIng;
	}
	
	public function setDescricaoIng($descricao){
		
		$this->descricaoIng = $descricao;
	}
	
	
	
	
	
	
	
	
	
	
	
}




