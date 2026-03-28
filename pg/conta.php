<?php
class Conta {
public $num;
public $tit;
public $saldo;
public $juros;


  public function depositar($conta, $valor) {
        $conta->saldo = $conta->saldo + $valor;
    }


     public function mostrarsaldo($conta) {
        echo "Saldo: " . $conta->saldo . "<br>";
    }
    
}

    $conta = new Conta();

    $conta->num ="2368";
    $conta->tit ="Beatriz";
    $conta->saldo = 400;


echo "Nome: " . $conta->tit . "<br>";
    echo "Numero: " . $conta->num . "<br>";
echo "Saldo inicial: " . $conta->saldo . "<br>";

echo "Depósito: 500 <br>";

$conta->depositar($conta, 500);

echo "Saldo final: " . $conta->saldo . "<br>";

