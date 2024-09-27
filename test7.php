<?php

$liczba=rand(1,100);

echo "Liczba gwiazdek: " . $liczba . "<br>";

for($i=$liczba;$i>0;$i--)
{
    echo "*";
}

?>