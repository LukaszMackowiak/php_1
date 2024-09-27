<?php

$a = rand(1,99);
$b = rand(1,99);

if ($a>$b)
    echo "Liczba a: ". $a ." jest większa od liczby b: " . $b;
else if ($b>$a)
    echo "Liczba b: ". $b ." jest większa od liczby a: " . $a;
else
    echo "Liczby są równe i wynoszą: " . $a;
?>