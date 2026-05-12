<?php

class ContaBancaria {

    private $titular;
    private $saldo = 0;


    public function setTitular($novoTitular) {

        if (!empty($novoTitular)) {

            $this->titular = $novoTitular;

        } else {

            echo "Titular inválido! <br>";
        }
    }

    
    public function getTitular() {

        return $this->titular;
    }

    
    public function depositar($valor) {

        if ($valor > 0) {

            $this->saldo = $this->saldo + $valor;

            echo "Depósito realizado! <br>";

        } else {

            echo "Valor inválido! <br>";
        }
    }

    public function sacar($valor) {

        if ($valor <= $this->saldo) {

            $this->saldo = $this->saldo - $valor;

            echo "Saque realizado! <br>";

        } else {

            echo "Saldo insuficiente! <br>";
        }
    }

    
    public function consultarSaldo() {

        echo "Saldo: " . $this->saldo . "<br>";
    }
}

$conta = new ContaBancaria();

$conta->setTitular("Beatriz");

$conta->depositar(500);

$conta->sacar(200);

echo "Titular: " . $conta->getTitular() . "<br>";

$conta->consultarSaldo();

?>