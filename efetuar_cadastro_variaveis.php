<?php
include "dao/dao_conexao.php"; // Chama a conexao com o banco de dados
 
 
if($_SERVER['REQUEST_METHOD']=='POST'){

    $portnome  = isset($_POST['port_nome']) ? $_POST['port_nome'] : '';
    $ingnome  = isset($_POST['ing_nome']) ? $_POST['ing_nome'] : '';
    $visibilidade  = isset($_POST['visibilidade']) ? $_POST['visibilidade'] : '';
    $tipo  = isset($_POST['tipo']) ? $_POST['tipo'] : '';

    if($tipo == "Externa"){
        $inserir = mysqli_query($conn, "INSERT INTO variaveis_externas (port_nome,ing_nome,visibilidade,idvariaveis_externas) VALUES('$portnome','$ingnome','$visibilidade','')")or die(mysqli_error());
    }else{
        $inserir = mysqli_query($conn, "INSERT INTO variaveis_internas (port_nome,ing_nome,visibilidade,idvariaveis_internas) VALUES('$portnome','$ingnome','$visibilidade','')")or die(mysqli_error());
       
    }
 

}
?>
