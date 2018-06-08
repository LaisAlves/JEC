<?php
// colocando esse link em uma página que é exclusivamente de acesso ao aluno do sistema no entando outro usuário não terá acesso ao mesmo.

if ( $_SESSION['tipo']!='aluno') {
    return header('Location:login.php');
}





?>
