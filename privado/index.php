<?php

class Pessoa {
    private $nome;
    private $idade;

    public function setNome($n){  
        $this->nome = $n;
    }

    public function getNome(){ 
        return $this->nome;
    }

    public function setIdade($i){  
        $this->idade = $i;
    }

    public function getIdade(){ 
        return $this->idade;
    }
}

$p = new Pessoa();
$p->setNome("Ana");
echo $p->getNome();

$p->setIdade(25);
echo $p->getIdade();

?>