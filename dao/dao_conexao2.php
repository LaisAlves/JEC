<?php

class Database{
	
    /*
    private $servidor = "localhost";
	private  $usuario = "id6128871_jec";
	private $senha = "projetojec2018if";
    private $dbname = "id6128871_mydb";
    */
    private $servidor = "localhost";
	private  $usuario = "root";
	private $senha = "";
    private $dbname = "mydb";
	private $port = "3306";
	private $Connect = null;
    
	
	public function getConecao (){
		
		 return $this->Conectar();
		
	}
	
	
	public function Conectar(){
        try{
            if($this->Connect == null):
                $dns = 'mysql:host='.$this->servidor.';port='.$this->port.';dbname='.$this->dbname;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                $this->Connect = new PDO($dns, $this->usuario, $this->senha, $options);
            endif;
        } catch (PDOException $e){
            exibeMensagens("Código do erro: {$e->getCode()}<br>"
            . "Mensagem : {$e->getMessage()}<br>"
            . "Arquivo: {$e->getFile()}<br>"
            . "<font style='color:red;'>Motivo: Não foi possivel se conectar ao banco de dados!</font><br>"
            . "Linha : {$e->getLine()}", WS_ERROR);
            die;
        }//finaliza catch
        return $this->Connect;
    }//finaliza método Conectar
	

	
}

	