<?php 

$nome = "Hilton";
$idade = 19;

function identidade() 
{
    global $nome;
    echo $nome." é meu nome.";
}

function idade()
{
    global $idade;
    echo "<br>".$idade." é minha idade";
}

identidade();
idade();

?>