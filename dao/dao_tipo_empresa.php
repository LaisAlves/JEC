<?php
require_once 'dao/dao_conexao2.php';
require_once 'model/TipoEmpresa.php';

class TipoEmpresaDao{
	
	
	function adiciona($conn,$tipo_empresa){
		$ex = "INSERT INTO tipo_empresa(PORT_NOME,PORT_DESCRICAO,ING_NOME,ING_DESCRICAO) values (oi,kk)";
$query = "INSERT INTO tipo_empresa (PORT_NOME,PORT_DESCRICAO,ING_NOME,ING_DESCRICAO) VALUES ('{$tipo_empresa->getNomePort()}', '{$tipo_empresa->getDescricaoPort()}','{$tipo_empresa->getNomeIng()}','{$tipo_empresa->getDescricaoIng()}')";    
    //  $result=  mysql_query($ex,$conn) or die (mysql_error($ex));		
		$conn->beginTransaction();
		
		$resultado = $conn->query($query);
		if(!$resultado)	{
		die("<p>Erro do salvar o Tipo de cenário</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conn->commit();
	echo 'Lançamento efetuado com sucesso!';
	}
	
	
	public function listaTipos()
  {
	  
	   $database = new Database();
	 $conexao = $database->Conectar();
	 $conexao->beginTransaction();	
    $sql = "SELECT * FROM `cenarios`
            ";
    $stmp = $conexao->prepare($sql);
    $resultado = $stmp->execute();
	if(!$resultado)	{
		die("<p>Erro do salvar o Tipo de Cenário</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conexao->commit();
    $dados = $stmp->fetchAll();
    return $dados;
  }
	public function removeTipo($id)
  {
	   $database = new Database();
	 $conexao = $database->Conectar();
      $sql = "DELETE FROM tipo_empresa WHERE idTIPO_EMPRESA = :id";
  $conexao ->beginTransaction();
            
    $stmp = $conexao->prepare($sql);
	$stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado = $stmp->execute();
	if(!$resultado)	{
		die("<p>Erro do salvar o Cenário</p>");
		
	}
	$conexao->commit();

    
    //return $resultado;	
    
  }
    public function editarTipo($id,$nomePort,$nomeIngl,$descricaoPort,$descricaoIng){
		$database = new Database();
    $conexao = $database->Conectar();
	//Inicio da Transação
	$conexao->beginTransaction();
    $sql = "UPDATE tipo_empresa SET
            PORT_NOME = :nomePort,
            ING_NOME = :nomeIngl,
            PORT_DESCRICAO =:descricaoPort,
			ING_DESCRICAO =:descricaoIng
            WHERE idTIPO_EMPRESA = :id;";
    $stmp = $conexao->prepare($sql);
    $stmp->bindValue(':nomePort',$nomePort,PDO::PARAM_STR);
    $stmp->bindValue(':nomeIngl',$nomeIngl,PDO::PARAM_STR);
	$stmp->bindValue(':descricaoPort',$descricaoPort,PDO::PARAM_STR);
	$stmp->bindValue(':descricaoIng',$descricaoIng,PDO::PARAM_STR);
    
    $stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado = $stmp->execute();
	if(!$resultado)	{
		die("<p>Erro do salvar o Tipo de Cenário</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conexao->commit();
    
   
    
  }
	
	
	
   // return $resultado;
	



}
