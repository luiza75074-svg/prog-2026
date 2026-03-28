<?php

class Aluno {

    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;
    public $media;
    public $situacao;

    public function calcularMedia($alu) {
        $alu->media = ($alu->nota1 * 4 + $alu->nota2 * 6) / 10;
    }

    public function verSituacao($alu) {
        if ($alu->media >= 7) {
            $alu->situacao = "Aprovado";
        } else {
            $alu->situacao = "Reprovado";
        }
    }
}


$alu = new Aluno();
$alu->nome = "Luiza";
$alu->matricula = "2024323388";
$alu->nota1 = 6;
$alu->nota2 = 8;


$alu->calcularMedia($alu);
$alu->verSituacao($alu);



echo "Nome: " . $alu->nome . "<br>";
echo "Matrícula: " . $alu->matricula . "<br>";
echo "Média: " . $alu->media . "<br>";
echo "Situação: " . $alu->situacao . "<br>";

?>