<?php

class Animal{
    // atributos

    public $tamanho;
    public $cor;
    public $numeroPatas;
    public $pelagem;

    //metodos
    public function andar (){
        echo "andando";

    }

    public function falar () {
        echo "falando";

    }

    public function comer () {
        echo "comendo";
        
    }



}

//instanciando objeto 
$gatopreto = new animal ();//instanciando objeto da classe animal
$gatopreto->cor = "preto";
$gatopreto->numeroPatas = 4;
$gatopreto->pelagem = "baixa";
$gatopreto->tamanho = 60;

echo "o gato preto tem cor". $gatopreto->cor . "<br>";
echo "o gato preto tem ". $gatopreto->numeroPatas . "patas <br>";
echo "o gato preto tem pelagem  ". $gatopreto->pelagem . "<br>";
echo "o gato preto tem  tamanho". $gatopreto->tamanho . " cm <br>";


$gatopreto->falar();




?>