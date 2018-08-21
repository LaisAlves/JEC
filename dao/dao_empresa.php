<?php
require_once 'dao/dao_conexao2.php';
require_once 'model/Empresa.php';

class EmpresaDao{
	
	function adiciona($conn,$empresa){
		
$query = "INSERT INTO empresas (NOME,CENARIOS_idCENARIOS,TIPO_EMPRESA_idTIPO_EMPRESA) VALUES ('{$empresa->getNome()}','{$empresa->getCenario()}','{$empresa->getEmpresa()}')";    
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
	
	public function removeEmpresa($id)
  {
	   $database = new Database();
	  
	  
	 $conexao = $database->Conectar();
	  //Inicio da Transação;
	 $conexao ->beginTransaction();
	 

    $sql = "DELETE FROM empresas WHERE idEMPRESAS = :id";
	 //preparaçao da execução da query jogos 
	$stmp = $conexao->prepare($sql); 
    $stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado =  $stmp->execute();

    if(!$resultado){
          //$conexao->rollback(); //Desfaz a inserção na tabela de movimentos em caso de erro na query da tabela conta */
          die ("<p>Erro da remover</p>");

	}	
   $conexao->commit();
    
    //return $resultado;	
    
  }
	
	public function editarEmpresa($id,$nome,$cenario,$empresa){
		$database = new Database();
    $conexao = $database->Conectar();
	//Inicio da Transação
	$conexao->beginTransaction();
    $sql = "UPDATE empresas SET
            NOME = :nome,
			CENARIOS_idCENARIOS=:cenario,
			TIPO_EMPRESA_idTIPO_EMPRESA=:empresa
            
            
            WHERE idEMPRESAS = :id;";
    $stmp = $conexao->prepare($sql);
	
    $stmp->bindValue(':nome',$nome,PDO::PARAM_STR);
    $stmp->bindValue(':cenario',$cenario,PDO::PARAM_INT);
     $stmp->bindValue(':empresa',$empresa,PDO::PARAM_INT);
    
    $stmp->bindValue(':id',$id,PDO::PARAM_INT);
	
    $resultado = $stmp->execute();
	
	if(!$resultado)	{
		die("<p>Erro do salvar </p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conexao->commit();
	echo 'Lançamento efetuado com sucesso!';
	}
		
	
	
	
	
	
}



