<?php
class Pessoa {

    public $nome = "Andreas";
    protected $idade = 18;
    private $senha = "12345";

    public function verDados() {

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}
class Programador extends Pessoa {
    public function verDados(){

    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>"; 
    }
}

$objeto = new Programador();

$objeto->verDados();

?>