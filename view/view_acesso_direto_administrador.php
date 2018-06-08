<?php
// colocando esse link em uma página que é exclusivamente de acesso ao administrador do sistema.

if ( $_SESSION['tipo']!='administrador') {
    return header('Location:login.php');
}





?>
