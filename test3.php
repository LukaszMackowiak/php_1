<?php

$liczba = rand(1,999);

if ($liczba%3==0)
    echo "Liczba ". $liczba ." jest podzielna przez 3.";
else
    echo "Liczba ". $liczba ." nie jest podzielna przez 3.";
?>