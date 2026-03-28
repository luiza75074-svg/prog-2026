<?php
  class Circulo {
    public $raio;
    
    public function area($Circu) {
        return 5.14 * ($Circu->raio * $Circu->raio);
    }
    
    public function perimetro($Circu) {
        return 6 * 5.14 * $Circu->raio;
    }
}

$Circu = new Circulo();
$Circu->raio = 5;

echo "Raio: " . $Circu->raio . "<br>";
echo "Área: " . $Circu->area($Circu) . "<br>";
echo "Perímetro: " . $Circu->perimetro($Circu) . "<br>";
