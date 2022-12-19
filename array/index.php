<?php

$pessoa = array();

array_push($pessoa,array( //acrescentar no array
    
    'nome' => 'Ayryslaine',
    'idade' => 18 ,
    'altura' => 1.57,

));
array_push($pessoa,array(
    'nome' => 'Hilton',
    'idade' => 19,
    'altura' => 1.75

));

//print_r ($pessoa[0]);

echo "<br>";

echo json_encode ($pessoa);



?>