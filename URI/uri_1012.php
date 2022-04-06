<?php

    $array_entradas = explode(" ", fgets(STDIN));
    $a = (double)$array_entradas[0];
    $b = (double)$array_entradas[1];
    $c = (double)$array_entradas[2];

    $triangulo  = number_format(($a * $c) / 2,3,'.',"");
    $circulo    = number_format(3.14159 * pow($c,2),3,'.',"");
    $trapezio   = number_format((($a + $b) * $c)/ 2,3,'.',"");
    $quadrado   = number_format(pow($b,2),3,'.',"");
    $retangulo  = number_format($a * $b,3,'.',"");

    echo "TRIANGULO: $triangulo\n";
    echo "CIRCULO: $circulo\n";
    echo "TRAPEZIO: $trapezio\n";
    echo "QUADRADO: $quadrado\n";
    echo "RETANGULO: $retangulo\n";

