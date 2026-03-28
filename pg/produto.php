<?php
class Produto{

public $nome;
public $quantidade;


public function adicionar($produto,$preco){
    $produto->quantidade = $produto->quantidade + $preco;
    echo "Produto adicionado " . $preco . "<br>";
}
    public function remover($produto,$preco){
        $produto->quantidade = $produto->quantidade - $preco;
        echo "Produto removido ".  $preco .  "<br>";

    }

    public function mostrar($produto){
        echo "Produto:  "  . $produto->nome  . "<br>";
        echo "Quantidade estoque: ". $produto->quantidade . "<br>";
    }
}

$produto = new Produto();

$produto->nome="arroz";
$produto->quantidade =10;


echo "<br>";

$produto->adicionar($produto, 8);

$produto->remover($produto, 6);
 
$produto->mostrar($produto);
?>

