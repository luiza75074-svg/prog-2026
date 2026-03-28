
<?php
class Retangulo {

public $comprimento;
public $largura;

public function Area($retan) {
$area = $retan->comprimento * $retan->largura;
echo "Area:".$area . "<br>";
}

}

$Retan = new Retangulo;
$Retan->comprimento = 20;
$Retan->largura = 2;



echo "Comprimento: " . $Retan->comprimento . "<br>";
echo"Largura: " .  $Retan->largura . "<br>"; 
$Retan->area($Retan);

