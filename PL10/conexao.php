<?php

$host = 'localhost';  
$user = 'root';       
$senha = '';          
$banco = 'pessoas_db'; 

$conexao = new mysqli($host, $user, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

?>

