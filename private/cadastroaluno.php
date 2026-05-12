<?php

class Aluno {

    private $nome;
    private $matricula;
    private $nota1;
    private $nota2;
    private $media;
    private $situacao;

    
    public function setNome($novoNome) {

        if (!empty($novoNome)) {
            $this->nome = $novoNome;
        }
    }

    
    public function getNome() {
        return $this->nome;
    }

    
    public function setMatricula($novaMatricula) {

        if (!empty($novaMatricula)) {
            $this->matricula = $novaMatricula;
        }
    }

    
    public function getMatricula() {
        return $this->matricula;
    }


    public function setNota1($novaNota1) {

        if ($novaNota1 >= 0 && $novaNota1 <= 10) {
            $this->nota1 = $novaNota1;
        }
    }

    
    public function setNota2($novaNota2) {

        if ($novaNota2 >= 0 && $novaNota2 <= 10) {
            $this->nota2 = $novaNota2;
        }
    }


    public function calcularMedia() {

        $this->media =
        ($this->nota1 * 4 + $this->nota2 * 6) / 10;
    }

    
    public function verSituacao() {

        if ($this->media >= 7) {

            $this->situacao = "Aprovado";

        } else {

            $this->situacao = "Reprovado";
        }
    }

    public function mostrarDados() {

        echo "Nome: " . $this->nome . "<br>";

        echo "Matrícula: " . $this->matricula . "<br>";

        echo "Média: " . $this->media . "<br>";

        echo "Situação: " . $this->situacao . "<br>";
    }
}



$alu = new Aluno();

$alu->setNome("Luiza");

$alu->setMatricula("2024323388");

$alu->setNota1(6);

$alu->setNota2(8);

$alu->calcularMedia();

$alu->verSituacao();

$alu->mostrarDados();

?>