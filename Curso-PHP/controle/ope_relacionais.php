<div class="titulo">Operadores relacionais</div>

<?php

    var_dump(1 == 1);
    var_dump(1 != 1);
    var_dump(1 > 1);
    var_dump(1 >= 1);
    var_dump(1 < 1);
    var_dump(1 <= 1);
    var_dump(1 <> 1);
    var_dump(111 == '111');
    var_dump(111 === '111');
    var_dump(111 != '111');
    var_dump(111 !== '111');

    $idade = 25;
    if($idade < 18)         echo "Menor de idade";
    else if($idade <= 65)   echo "Adulto";
    else                    echo "Velho";

    var_dump(50 <=> 3);
    var_dump(50 <=> 50);
    var_dump(5 <=> 50);
    var_dump(!!5);
    var_dump(!!0);
    var_dump(!!"");
    var_dump(!!" ");