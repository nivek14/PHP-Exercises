<div class="titulo">Switch</div>

<?php

    $categoria = "luxo";
    $preco = 0.0;
    $carro = "";

    switch($categoria){
        case "luxo":
            $carro = "mercedes";
            $preco = 200000;
            break;
        case "suv":
            $carro = "renegade";
            $preco = 30000;
            break; 
        case "sedan":
            $carro = "etios";
            $preco = 400000;
            break;
        default:
            $carro = "mobi";
            $preco = 200000;
            break;
    }

    echo "$categoria $carro $preco";