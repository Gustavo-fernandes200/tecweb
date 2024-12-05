<html>
    <head>
        <title>
            3º Exemplo
        </title>
    </head>
    <body>
        <?php
            $str = "String de exemplo";
            echo "O primeiro caracter é: $str[0] <br>";
            echo "O terceiro caracter é: $str[2] <br>";
            echo "O último caracter é: {$str[strlen($str)-1]}";
        ?>
    </body>
</html>
