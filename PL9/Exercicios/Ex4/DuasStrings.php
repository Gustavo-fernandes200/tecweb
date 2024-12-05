<?php

$filename = "exemplo.txt";
$string1 = "string_antiga";
$string2 = "string_nova";

if (replaceStringsInFile($filename, $string1, $string2)) {
    echo "Substituições concluídas com sucesso!";
} else {
    echo "Ocorreu um erro durante as substituições.";
}
