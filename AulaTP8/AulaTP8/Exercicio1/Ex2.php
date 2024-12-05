<html>
    <head>
        <title>2º Exemplo</title>
    </head>
    <body>
        <?php
            $hr = true;
            if($hr == true)
            echo "<hr>\n";

            $a = 5.0;
            $b = &$a; // b é uma referência à variável a
        ?>
    </body>
</html>