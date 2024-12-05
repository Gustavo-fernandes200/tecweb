<?php
if (!file_exists("index2.html")) {
    print("Impossível abrir index.html\n");
} else {
    if ($texto = file("index2.html")) {
        for ($linha = 0; $linha < count($texto); $linha++) {
         print("$texto[$linha] <br>");
        }
    }
}
        