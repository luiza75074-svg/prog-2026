<?php

class Livro{
    // atributos

    public $titulo;
    public $autor;
    public $numerodepaginas;
    public $anodepublicacao;

    //metodos
    public function disponivel (){
        echo " o livro esta disponivel <br>";

    }

    public function livroGrande (){
    echo "O livro é grande <br>";

    }

   public function mostrarResumo (){
    echo "Mostrando resumo do livro <br>";
        
    }



}

//instanciando objeto 
$livro = new livro ();//instanciando objeto da classe animal
$livro->titulo= "Assim que acaba";
$livro->autor= "colleen hoover";
$livro->numerodepaginas= 420;
$livro->anodepublicacao= 2016;

echo " Nome: ".  $livro->titulo . "<br>";
echo " Autor: "  .   $livro->autor .  "<br>";
echo "Numero de paginas: " . $livro->numerodepaginas . " paginas <br>";
echo "Ano de publicação: " . $livro->anodepublicacao . "<br>";


$livro->disponivel();
$livro->livroGrande();
$livro->mostrarResumo();




?>