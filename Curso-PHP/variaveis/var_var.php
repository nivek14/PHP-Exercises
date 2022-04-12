<div class="titulo">Variáveis Variáveis</div>

<?php

    $a  = 'valorA';
    $$a = 'valorAA';
    echo "$a {$$a} $valorA";

    $a          = 'nossa';
    $nossa      = 'eu';
    $eu         = 'consegui';
    $consegui   = 'responder';
    $responder  = 'esse';
    $esse       = 'desafio';

    echo "$a {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}";