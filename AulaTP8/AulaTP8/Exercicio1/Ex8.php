<?php
if (!$file = fopen("index.html", "r")) 
{
 print("Impossível abrir index.html\n");
} else {
    while (!feof($file)) 
    {
        echo (fgets($file, 1024));
    }
    fclose($file);
}