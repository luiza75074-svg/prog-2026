<?php
class Triangulo {
    public $base;
    public $altura;
    public $lado1;
    public $lado2;
    public $lado3;

    public function area() {
        echo ($this->base * $this->altura) / 2;
    }

    public function tipo() {
        if ($this->lado1 == $this->lado2 && $this->lado1 == $this->lado3) {
            echo "Equilátero";
        } else {
            if ($this->lado1 == $this->lado2 || $this->lado1 == $this->lado3 || $this->lado2 == $this->lado3) {
                echo "Isósceles";
            } else {
                echo "Escaleno";
            }
        }
    }
}

$Tria= new Triangulo();

$Tria->base = 12;
$Tria->altura = 6;
$Tria->lado1 = 5;
$Tria->lado2 = 5;
$Tria->lado3 = 5;

echo "Área: ";
$Tria->area();

echo "<br>Tipo: ";
$Tria->tipo();
?>