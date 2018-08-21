<?php
//chama o arquivo de configuração com o banco

//seleciona os dados da tabela produto

$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "irrf";
	
	//Criar a conexao
	 $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	 $query="SELECT * FROM calculo";
$resultado = mysqli_query($conn,$query);
// abaixo montamos um formulário em html
// e preenchemos o select com dados
?>

 
  <select>
  <?php while($row= mysqli_fetch_assoc($resultado)):;?>
  
    <option> <?php echo $row['id'];?></option>
	<?php endWhile;?>
     </select>

    <?php while($prod = mysql_fetch_array($query)) { ?>
    <option value="<?php echo $prod['idPROFESSORES'] ?>"><?php echo $prod['NOME'] ?></option>
    <?php } ?>
  </select>
</form>


