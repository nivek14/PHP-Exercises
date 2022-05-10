<?php

    $conta1 = [
        "titular" => "teste",
        "saldo" => 1000.00
    ];

    $conta2 = [
        "titular" => "teste2",
        "saldo" => 1020.00
    ];

    $conta3 = [
        "titular" => "teste3",
        "saldo" => 1300.00
    ];

    $contas = [$conta1, $conta2, $conta3];

    foreach($contas as $conta){
        echo $conta["saldo"] . PHP_EOL;
    }