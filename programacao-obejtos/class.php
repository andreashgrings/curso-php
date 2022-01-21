<?php
class Pessoa {
    public $nome; //atributo

    public function falar() { // método

        return "O meu nome é ".$this->nome;
    }
}
$marcus = new Pessoa();
$marcus->nome = "Marcus Ribeiro";
echo $marcus->falar();
?>