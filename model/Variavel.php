<?php
class Variavel{
    private $nomeport;
    private $nomeing;
	private $tipo;
	private $visibilidade;
	
	
	public function getNomePort(){
		return $this ->nomeport;
	}
	
	public function setNomePort($nomeport){
		
		$this->nomeport = $nomeport;
    }

    public function getNomeIng(){
		return $this ->nomeing;
	}
	
	public function setNomeIng($nomeing){
		
		$this->nomeing = $nomeing;
	}
	
	public function getTipo(){
		return $this ->tipo;
	}
	
	public function setTipo($tipo){
		
		$this->tipo = $tipo;
	}
	
	public function getVisibilidade(){
		return $this ->visibilidade;
	}
	
	public function setVisibilidade($visibilidade){
		
		$this->visibilidade = $visibilidade;
	}
	
}




