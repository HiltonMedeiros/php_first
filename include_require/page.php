<?php



/*include("index.php"); /*include = incluir //
            tenta funcionar mesmo com o erro.*/
/*require("index.php");//obriga que o arquivo exista
 e esteja sem erro.  */

 require_once("index.php");/* _once ,faz com ele seja incluido
                             uma única vez*/


$valor1 = 5;
$valor2 = 9;

$total = soma($valor1,$valor2);

echo $total;

?>