<div class="titulo">Operações</div>

<?php

    $dados1 = [
        "nome" => "jose",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "fortaleza", 
    ];

    $dadosComplemento = $dados1 + $dados2;
    print_r($dadosComplemento);

    is_array($dadosComplemento);    // verifica se variavel é um array
    count($dadosComplemento);       // conta o número de elementos do array
    array_rand($dadosComplemento);  
    unset($dadosComplemento["nome"]); // remove um elemento da lista

    $impares = [1,3,5,7,9];
    $pares = [0,2,4,6,8];
    $valores = array_merge($pares,$impares);
    sort($valores);
