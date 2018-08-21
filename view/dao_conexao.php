<?php
$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
mysql_select_db("mydb",$conectar)or die ("Base não encontrada");
?>