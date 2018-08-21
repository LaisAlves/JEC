<?php
require_once 'dao/dao_conexao2.php';
require_once 'model/Professor.php';

class ProfessorDao{
	
	
	function adiciona($conn,$professor){
		// exemplo de query para dar erro no commit
		$ex = "INSERT INTO professores(PORT_DESCRICAO,ING_DESCRICAO) values (oi)";
     $query = "INSERT INTO professores (NOME,EMAIL,SENHA) VALUES ('{$professor->getNome()}', '{$professor->getEmail()}', '{$professor->getSenha()}')";    
    //  $result=  mysql_query($ex,$conn) or die (mysql_error($ex));		
	
	// Inicio da Transação
	$conn->beginTransaction();
		
		$resultado = $conn->query($query);
	if(!$resultado)	{
		die("<p>Erro do salvar</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conn->commit();
	echo 'Lançamento efetuado com sucesso!';
	}
	public function listaProfessores()
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
	public function removeProfessor($id)
  {
	   $database = new Database();
	  
	  
	 $conexao = $database->Conectar();
	  //Inicio da Transação;
	 $conexao ->beginTransaction();
	 

    $sql = "DELETE FROM professores WHERE idPROFESSORES = :id";
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
    public function editarProfessor($id,$nome,$email,$senha){
		$database = new Database();
    $conexao = $database->Conectar();
	//Inicio da Transação
	$conexao->beginTransaction();
    $sql = "UPDATE professores SET
            NOME = :nome,
            EMAIL = :email,
            SENHA = :senha
            WHERE idPROFESSORES = :id;";
    $stmp = $conexao->prepare($sql);
    $stmp->bindValue(':nome',$nome,PDO::PARAM_STR);
    $stmp->bindValue(':email',$email,PDO::PARAM_STR);
    $stmp->bindValue(':senha',$senha,PDO::PARAM_STR);
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
