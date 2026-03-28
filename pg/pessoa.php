<?php
class Pessoa {

public $nome;
public $idade;
public $genero;

public function mostrar($pessoa){
    echo "Nome: " . $pessoa->nome . "<br>";
    echo "Idade: " . $pessoa->idade . " anos <br>";
    echo "Gênero: " . $pessoa->genero . "<br>";
}

public function calcular($pessoa){
    $meses = $pessoa->idade * 12;
    $dias = $pessoa->idade * 365;

    echo "Idade em meses: " . $meses . "<br>";
    echo "Idade em dias: " . $dias . "<br>";
}
}
$pessoa = new Pessoa();
$pessoa->nome = "Zenilda";
$pessoa->idade = "57";
$pessoa->genero = "feminino";


$pessoa-> mostrar($pessoa);
echo "<br>";
$pessoa->calcular($pessoa);

?>