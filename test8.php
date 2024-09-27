<?php

$liczba=rand(1,10);

echo "Wylosowana liczba: " . $liczba . "<br>";

$liczba2 = $liczba*$liczba;

for($i=1;$i<=$liczba2;$i++)
{
    echo ":-)";

    if ($i % $liczba==0)
    {
        echo "<br>";
    }
}

?>