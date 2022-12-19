<?php

$nome = "Hilton Medeiros";
$nome2 = 'Medeiros';

//var_dump($nome,$nome2);

/*
echo 'abc $nome'; //aspas simples interpreta tudo como texto.
echo "abc $nome";
*/

echo strtolower ($nome); //tudo minusculo 

echo "<br>";

echo strtoupper ($nome); // tudo maiusculo

echo "<br>";

echo ucwords($nome); // primeira letra maiúscula

echo "<br>";

$nome = str_replace("Hilton Medeiros","Ayryslaine Kelle",$nome); //Alteração de string ->string_alterada/nova_string / nome_variável.

echo $nome;

echo "<br>";

$nome = strpos($nome,"Kelle");//Mostra a posição do nome 'kelle' -> 11

echo $nome ;




echo "<br>";



?>
