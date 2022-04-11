<div class="titulo">Equação exercício</div>

<?php

    $num1 = 1;
    $num2 = 2;
    $num3 = 3;
    $num5 = 5;
    $num6 = 6;
    $num7 = 7;
    $num10 = pow(10,3);

    $eq_p1 = (pow($num6 * ($num3 + $num2),2)) / ($num3 * $num2);
    $eq_p2 = pow((($num1 - $num5) * ($num2 - $num7)) / $num2,2);
    $eq_p3 = pow($eq_p1 - $eq_p2,3);
    $eq_p4 = $eq_p3 / $num10;

    echo $eq_p4;