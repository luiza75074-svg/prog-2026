<?php

class Carro {

    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velomax;

    public function acelerar() {
        echo "O carro está acelerando <br>";
    }

    public function frear() {
        echo "O carro está freando <br>";
    }
}

// Criando objeto
$car = new Carro();

$car->marca = "Chevrolet";
$car->modelo = "Tracker";
$car->ano = 2020;
$car->cor = "Preto Ouro Negro";
$car->velomax = 180;

// Exibir   informações
echo "Marca: " . $car->marca . "<br>";
echo "Modelo: " . $car->modelo . "<br>";
echo "Ano: " . $car->ano . "<br>";
echo "Cor: " . $car->cor . "<br>";
echo "Velocidade Máxima: " . $car->velomax . " km/h <br>";

echo "<br>";


$car->acelerar();
$car->frear();

?>