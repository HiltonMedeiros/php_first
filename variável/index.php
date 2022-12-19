<?php

//variáveis simples

$nome = "Ayryslaine";
$sobrenome = 'Nézio';
$idade = 18;
$rgm = 292.64197;
$aprovado = true;
$bloqueado = false;

/////////////////////////////////////

//variáveios compostas

$frutas = array("laranja","banana","uva","morango");
echo $frutas[3];

$nascimento = new DateTime();

var_dump($nascimento);
//////////////////////////////////////

//Variáveis especiais

$arquivo = fopen("index.php", "r");

var_dump($arquivo);
 
//Variável nula e vazia

$nulo = NULL; //Não existe
$vazio = "" //Informação existe mas ainda não possue informação

?>