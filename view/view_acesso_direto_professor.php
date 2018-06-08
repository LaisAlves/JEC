<?php
// colocando esse link em uma página que é exclusivamente de acesso ao professor do sistema no entando outro usuário não terá acesso ao mesmo.

if ( $_SESSION['tipo']!='professor') {
    return header('Location:login.php');
}





?>
