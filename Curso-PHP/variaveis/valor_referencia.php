<div class="titulo">Valor referência</div>

<?php

    $v = 'valor inicial';
    echo "<br>$v";

    $n = $v;
    echo "<br>$n";
    $n = 1;
    echo "<br>$n";

    $m = &$a;
    echo "<br>$m";

    $m = 2;
    echo "<br>$m";
    echo "<br>$a";