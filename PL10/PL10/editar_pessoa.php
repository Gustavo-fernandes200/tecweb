<?php
include 'conexao.php';

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['idade'])) {
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if (empty($nome) || empty($idade)) {
            
            echo "Erro: Nome e idade são campos obrigatórios.";
            
        } else {
            
            include 'conexao.php';

            $id = $conexao->real_escape_string($id);
            $nome = $conexao->real_escape_string($nome);
            $idade = $conexao->real_escape_string($idade);

            $sql = "UPDATE pessoas SET nome='$nome', idade='$idade' WHERE id='$id'";
        
            if ($conexao->query($sql) === TRUE) {
               
                echo "Pessoa atualizada com sucesso.";
            } else {
                
                echo "Erro ao atualizar pessoa: " . $conexao->error;
            }
            $conexao->close();
        }
    } else {
        
        echo "Erro: Dados incompletos.";
    }
}
?>
