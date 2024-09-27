<?php

$liczba=rand(1,20);
$drewno=$liczba-1;

echo $liczba . "!: <br>";

while ($drewno>0)
{
    $liczba = $liczba * $drewno;
    $drewno--;
}

echo $liczba;

?>