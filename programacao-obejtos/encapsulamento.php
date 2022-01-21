<?php
class Pessoa {

    public $nome = "Andreas";
    protected $idade = 18;
    private $senha = "12345";

    public function verDados() {

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
        
        // se tentarmos acessar informações privadas ou protegidas,
        //  a pg. web não vai dar acesso
        // o nível de dificuldade de acesso para as informações é:
        //  público, protegido, privado
    }

}

$objeto = new Pessoa();

echo $objeto-> nome . "<br>";
$objeto->verDados();

?>