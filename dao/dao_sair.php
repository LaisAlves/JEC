<?php

session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

$_SESSION['msg'] = "Deslogado com sucesso";
$_SESSION['logado']='0';
header("Location: index.php");