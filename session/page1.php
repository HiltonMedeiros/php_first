<?php

//session_id('32374428');// Caso queira determinar um ID fixo.

require_once("index.php");

// session_unset($_SESSION['nome']); //apaga a variável

echo "Nome: ". $_SESSION['nomeCompleto'] . "<br>" . "Idade: " . $_SESSION["idade"] . "<br>" ."Aniversário: " . $_SESSION["dataNascimento"];

echo "<br>";

echo $id;

echo "<br>";

var_dump($_SESSION);



?>