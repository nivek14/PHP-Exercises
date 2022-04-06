<?php

$first_line = explode(" ", fgets(STDIN));
$second_line = explode(" ", fgets(STDIN));

$cod1 = (int)$first_line[0];
$num1 = (int)$first_line[1];
$val1 = (double)$first_line[2];

$cod2 = (int)$second_line[0];
$num2 = (int)$second_line[1];
$val2 = (double)$second_line[2];

$total = number_format(($num1 * $val1) + ($num2 * $val2),2,'.',"");

echo "VALOR A PAGAR: R$ $total\n";