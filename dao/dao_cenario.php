<?php
require_once 'dao/dao_conexao2.php';
require_once 'model/Cenario.php';

class CenarioDao{
	
	
	function adiciona($conn,$cenario){
		// exemplo de query para dar erro no commit
		$ex = "INSERT INTO cenarios(PORT_DESCRICAO,ING_DESCRICAO) values (oi)";
     $query = "INSERT INTO cenarios (PORT_DESCRICAO, ING_DESCRICAO) VALUES ('{$cenario->getNomePort()}', '{$cenario->getNomeIng()}')";    
    //  $result=  mysql_query($ex,$conn) or die (mysql_error($ex));		
	
	// Inicio da Transação
	$conn->beginTransaction();
		
		$resultado = $conn->query($query);
	if(!$resultado)	{
		die("<p>Erro do salvar o Cenário</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conn->commit();
	echo 'Lançamento efetuado com sucesso!';
	}
	public function listaCenarios()
  {
	  
	   $database = new Database();
	 $conexao = $database->Conectar();
    
    $sql = "SELECT * FROM `cenarios`
            ";
    $stmp = $conexao->prepare($sql);
    $stmp->execute();
    $dados = $stmp->fetchAll();
    return $dados;
  }
	public function removeCenario($id)
  {
	   $database = new Database();
	  
	  
	 $conexao = $database->Conectar();
	  //Inicio da Transação;
	 $conexao ->beginTransaction();
	 

    $sql = "DELETE FROM cenarios WHERE idCENARIOS = :id";
	 //preparaçao da execução da query jogos 
	$stmp = $conexao->prepare($sql); 
    $stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado =  $stmp->execute();

    if(!$resultado){
          //$conexao->rollback(); //Desfaz a inserção na tabela de movimentos em caso de erro na query da tabela conta */
          die ("<p>Erro da remover o Cenário kk</p>");

	}	
   $conexao->commit();
    
    //return $resultado;	
    
  }
    public function editarCenario($id,$nomePort,$nomeIng){
		$database = new Database();
    $conexao = $database->Conectar();
	//Inicio da Transação
	$conexao->beginTransaction();
    $sql = "UPDATE cenarios SET
            PORT_DESCRICAO = :nomePort,
            ING_DESCRICAO = :nomeIng
            
            WHERE idCENARIOS = :id;";
    $stmp = $conexao->prepare($sql);
    $stmp->bindValue(':nomePort',$nomePort,PDO::PARAM_STR);
    $stmp->bindValue(':nomeIng',$nomeIng,PDO::PARAM_STR);
    
    $stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado = $stmp->execute();
	if(!$resultado)	{
		die("<p>Erro do salvar o Cenário</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conexao->commit();
	echo 'Lançamento efetuado com sucesso!';
	}
   // return $resultado;
	
public function retornaCenario($id){

	   $database = new Database();
	  
	  
	 $conexao = $database->Conectar();
	  //Inicio da Transação;
	 $conexao ->beginTransaction();
      $sql = "SELECT * FROM cenarios WHERE idCENARIOS = :id";
  
            
    $stmp = $conexao->prepare($sql);
	$stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado = $stmp->execute();
  if(!$resultado)	{
		die("<p>Erro  ao retornar Cenário</p>");
		
	}
   $conexao->commit();
    
    //return $resultado;	

}

}
