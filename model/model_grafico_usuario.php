<?php
//nessa pagina cria-se uma imagem no qual na view colocarei o caminho dessa página 

#Incluimos a biblioteca
include('phplot.php');
include('../dao/dao_grafico.php');
$dados_banco_de_dados = lista_usuarios();
$grafico = new PHPlot(300,250); //cria um gráfico com tamanho 800x600 pixels

$grafico->SetTitle("Title\n\rSubtitle");

$grafico->SetXTitle('X data');

$grafico->SetYTitle('Y data');

//Dados para gerar o gráfico

$exemplo = $dados_banco_de_dados;



$grafico->SetDataValues($exemplo);

$grafico->DrawGraph();
?>