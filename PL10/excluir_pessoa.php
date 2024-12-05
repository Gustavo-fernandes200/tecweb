<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['id'])) {

        $id = $_POST['id'];

        include 'conexao.php';

        $id = $conexao->real_escape_string($id);

        $sql = "DELETE FROM pessoas WHERE id='$id'";
        
        if ($conexao->query($sql) === TRUE) {

            echo "Pessoa excluída com sucesso.";

        } else {

            echo "Erro ao excluir pessoa: " . $conexao->error;
        }

        $conexao->close();
        
    } else {
        echo "Erro: ID da pessoa não foi enviado.";
    }
}
?>
