<?php
    class Teste
    {
        public function testar() 
        {
            echo "Em teste";
        }
    }
    $t = new Teste;
    $t->testar(); // -> is the Object Operator (non-static)
?>