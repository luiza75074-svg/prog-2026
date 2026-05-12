<?php

class Funcionario {

    private $nome;
    private $cargo;
    private $salario;

    
    public function setNome($novoNome) {

        if (!empty($novoNome)) {
            $this->nome = $novoNome;
        }
    }

    
    public function getNome() {
        return $this->nome;
    }

    
    public function setCargo($novoCargo) {

        if (!empty($novoCargo)) {
            $this->cargo = $novoCargo;
        }
    }

    
    public function getCargo() {
        return $this->cargo;
    }

    
    public function setSalario($novoSalario) {

        if ($novoSalario > 0) {
            $this->salario = $novoSalario;
        }
    }


    public function getSalario() {
        return $this->salario;
    }

    public function aumentarSalario($percentual) {

        if ($percentual > 0) {

            $this->salario =
            $this->salario +
            ($this->salario * $percentual / 100);
        }
    }
}



$func = new Funcionario();

$func->setNome("Everton");

$func->setCargo("Gerente");

$func->setSalario(3000);

echo "Nome: " . $func->getNome() . "<br>";

echo "Cargo: " . $func->getCargo() . "<br>";

echo "Salário antes: " . $func->getSalario() . "<br>";

$func->aumentarSalario(10);

echo "Salário depois: " . $func->getSalario();

?>