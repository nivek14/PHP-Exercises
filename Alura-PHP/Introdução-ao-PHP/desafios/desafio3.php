<?php

    $peso   = (double)readline();
    $altura = (double)readline();

    $imc = $peso / pow($altura, 2);

    if($imc < 18.5) echo "Magreza" . PHP_EOL;
    else if($imc < 24.9 && $imc > 18.5) echo "Normal" . PHP_EOL;
    else if($imc < 29.9 && $imc > 25) echo "Sobrepeso" . PHP_EOL;
    else echo "Obesidade" .PHP_EOL;