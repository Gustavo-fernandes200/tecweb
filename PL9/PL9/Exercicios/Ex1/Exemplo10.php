<?php
    if (!$ficheiro = fopen("index.html", "r")) {
        print("Impossível abrir index.html\n");
    } else {
        fpassthru($ficheiro);
        fclose($ficheiro);
    }