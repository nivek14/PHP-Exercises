<div class="titulo">Mapa</div>

<?php

    $dados = array(
        "idade" => 25, 
        "cor" => "verde",
        "peso" => 49.7
    );

    print_r($dados);

    echo $dados["idade"];
    echo $dados["cor"];
    echo $dados["peso"];

    $dados["test"] = "add_test";

    echo $dados["test"];