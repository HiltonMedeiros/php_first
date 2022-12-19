<?php
$name = 'hilton';

echo $name . " é profissional em c#<br>";

$name .= ' ama chupar o cu de ayryslaine.<br>';//.= adiciona conteudo á variável criada.

echo $name ;
//////////////////////////////////////////////////

$valorTotal = 0;
echo $valorTotal."<br>";

$valorTotal += 100; //Soma 100 ao valor da variável
echo $valorTotal ."<br>";

$valorTotal -= 50;
echo $valorTotal ."<br>";

$valorTotal *=  .1; //10% do valor
echo $valorTotal ."<br>";

$valorMinimo = 2;

var_dump($valorMinimo > $valorTotal); // print - bool(false)
echo "<br>";
var_dump($valorMinimo = $valorTotal); // = operador de atribuição
echo "<br>";
var_dump($valorMinimo == $valorTotal); // == operador de comparação do valor
echo "<br>";
var_dump($valorMinimo === $valorTotal); // === operador de comparação do valor e tipo.
echo "<br>";
var_dump($valorMinimo <=> $valorTotal); /* print 0 para igualdade / print 1 se a variável_Esquerda foir maior 
                                        /print -1 se a variável_Direita foir maior*/
echo "<br>";

$valorTotal ++; //Incremento , adiciona 1 ao valor
$valorTotal --; //Decremento , subtrai 1 ao valor
echo $valorTotal;

 && = e
 || = ou



?>