<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $idade = mysqli_real_escape_string($conexao, $_POST['idade']);

    if (empty($nome) || empty($idade)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    $conexao->begin_transaction();

    $sql = "INSERT INTO pessoas (nome, idade) VALUES ('$nome', '$idade')";
    
    if ($conexao->query($sql) === TRUE) {

        $conexao->commit();
        echo htmlspecialchars("Pessoa criada com sucesso.");
        echo '<a href="' . htmlspecialchars($_SERVER['HTTP_REFERER']) . '">Voltar</a>';
    } else {
        
        $conexao->rollback();
        
        echo "Erro ao criar pessoa: " . $conexao->error;
    }
}
$conexao->close();
?>
