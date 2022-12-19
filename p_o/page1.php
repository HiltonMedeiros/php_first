<?php

class Pessoa //classe
{
    public $nome; //atributo 

    public function falar()
    {
        return  "O meu nome é ". $this ->nome;  // $this ,a representação da classe já instanciada , o objeto
    }
}

$hilton = new Pessoa();
$hilton->nome = "Hilton Medeiros";
echo $hilton->falar();

?>