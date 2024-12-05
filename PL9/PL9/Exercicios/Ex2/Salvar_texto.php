<?php

$texto = $_POST['texto'];
$nome_arquivo = $_POST['nome_arquivo'];

if (!preg_match('/^[a-zA-Z0-9\._-]+\.txt$/', $nome_arquivo)) {
    $mensagemErro = "Nome do arquivo inválido. Utilize apenas letras, números, ponto, hífen e sublinhado, com a extensão .txt.";
} else {

    $nome_arquivo = strtolower($nome_arquivo); 
    $nome_arquivo = str_replace(' ', '_', $nome_arquivo); 
}

$arquivo = fopen($nome_arquivo, 'w');
if (!$arquivo) {
    $mensagemErro = "Erro ao abrir o arquivo {$nome_arquivo}.";
} else {
    
    fwrite($arquivo, $texto);
    fclose($arquivo);
  
    $mensagemSucesso = "Texto salvo com sucesso no arquivo {$nome_arquivo}!";
}

if (isset($mensagemErro)) {
    echo "<p style='color: red;'>{$mensagemErro}</p>";
} else {
    echo "<p style='color: green;'>{$mensagemSucesso}</p>";
}

?>
