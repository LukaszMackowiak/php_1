<?php

$a=rand(1,10);
$b=rand(1,10);
$suma=$a;

echo $a . " do potęgi " . $b . ": <br>";

while ($b>1)
{
    $suma = $suma * $a;
    $b--;
}

echo $suma;

?>