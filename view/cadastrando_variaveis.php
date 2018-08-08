<html>
<head>
</head>
<body>
<?php
include_once("conexao.php");
$port_nome = $_POST['port_nome'];
$ing_nome = $_POST['ing_nome'];
$visibilidade = $_POST['visibilidade'];
echo "$port_nome";

$result_usuario = "INSERT INTO variaveis(port_nome, ing_nome, visibilidade) VALUES ('$port_nome','$ing_nome', '$visibilidade')";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

echo "<h1>Cadasto Efetuado</h1>";
?>
</body>
</html>
