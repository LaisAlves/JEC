<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "jec";
$conexao = mysqli_connect($host, $user, $pass, $banco);

if(!$conexao){
  die("Falha na conexao: " . mysqli_connect_error());
}else{

}
?>
