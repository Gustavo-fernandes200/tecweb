<?php
    $a = 2;
    $b = 5;

    function soma1() 
    {
        global $a, $b;
        $b = $a + $b;
    }

    function soma2() 
    {
        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    soma1();
    echo $b.'****';
    soma2();
    echo $b;
?>
