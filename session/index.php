<?php

session_start(); //começar sessão

$_SESSION["nomeCompleto"] = "Ayryslaine Kelle de Nézio Leal"; // varávelGlobal[variável] = nomeVariável
$_SESSION["idade"] = "18 anos";
$_SESSION["dataNascimento"] = "18 de Maio";


$id = session_id();

session_regenerate_id(); // gera novamente um id de sessão - boa prática


?>