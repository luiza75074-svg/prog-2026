<?php

class funcionario{
    // atributos

    public $nomefuncionario;
    public $cargo;
    public $salario;
    public $datadeadmissão;

    //metodos
    public function ocupado (){
        echo " Everton   esta ocupado <br>";

    }

    public function analizandoestoque (){
    echo "O Everton analizou o estoque <br>";

    }

   public function cumprihorario (){
    echo "O Everton  cumpriu seu  horario<br>";
        
    }

public function salarioanual ($salario){
    $anotodo = $salario * 12;
    echo "O salario anual é " . $anotodo . " reais <br>";
}

}



//instanciando objeto 
$func = new funcionario ();//instanciando objeto da classe animal
$func-> nomefuncionario= "Everton";
$func->cargo= "gerente";
$func->salario= 3000;
$func->datadeadmissao= "05-06-2025" ;


echo "Nome: " . $func->nomefuncionario . "<br>";
echo "Cargo: " . $func->cargo . "<br>";
echo "Salário: " . $func->salario . " reais <br>";
echo "Data de admissão: " . $func->datadeadmissao . "<br>";


// salário anual 
$func->salarioanual($func->salario);


$func->ocupado();
$func->analizandoestoque();
$func->cumprihorario();




?>