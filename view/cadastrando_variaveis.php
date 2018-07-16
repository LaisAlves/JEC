<html>
<head>
  <title>Cadastrado</title>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "jec";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($banco) or die(mysqli_error());


$port_nome = $_POST['port_nome'];
$ing_nome = $_POST['ing_nome'];
$visibilidade = $_POST['visibilidade'];
$sql = mysqli_query($conexao, "INSERT INTO variaveis(port_nome, ing_nome, visibilidade) VALUES('$port_nome','$ing_nome','$visibilidade')");

echo "<h1>Cadastro feito com sucesso!!</h1>";
?>
</body>
</html>
