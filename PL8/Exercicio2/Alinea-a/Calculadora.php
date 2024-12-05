<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    echo "<p>A soma de $valor1 e $valor2 é igual a $soma.</p>";
}
?>