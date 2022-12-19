<?php

$verdade = "gostosa";
$verdade2 = "cheirosa";
$fato = $verdade . $verdade2;

unset($verdade); //unset tira a variável da memória

echo "Ayryslaine </br> é linda </br> e $verdade";


if(isset($verdade)) //isset "existe"  / 'se existe $variável(condição)'
{
    echo "variável existe.";

}
else
{
    echo "também </br> é o amor da minha vida!</br>";
    echo "$fato";

}
?>
