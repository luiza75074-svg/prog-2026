<?php
class Funcionario {

    private $nome;
    private $idade;
    private $salario;


    public function setNome($n){
        if(empty($n)){
            echo " o nome não pode ser vazio.<br>";
        } else {
            $this->nome = $n;
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function setIdade($i){
        if($i < 0 || $i > 120){
            echo " idade deve estar entre 0 e 120.<br>";
        } else {
            $this->idade = $i;
        }
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setSalario($s){
        if($s <= 0){
            echo " salário deve ser maior que 0.<br>";
        } else {
            $this->salario = $s;
        }
    }
    public function getSalario(){
        return $this->salario;
    }
}
$func = new Funcionario();

$func->setNome("João");
$func->setIdade(30);
$func->setSalario(2500);

echo "Nome: " . $func->getNome() . "<br>";
echo "Idade: " . $func->getIdade() . "<br>";
echo "Salário: " . $func->getSalario();
?>