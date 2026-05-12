<?php

class Produto {

    private $nome;
    private $preco;
    private $quantidade;

    
    public function setNome($novoNome) {

        if (!empty($novoNome)) {
            $this->nome = $novoNome;
        } else {
            echo "Nome inválido! <br>";
        }
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function setPreco($novoPreco) {

        if ($novoPreco > 0) {
            $this->preco = $novoPreco;
        } else {
            echo "Preço inválido! <br>";
        }
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setQuantidade($novaQuantidade) {

        if ($novaQuantidade >= 0) {
            $this->quantidade = $novaQuantidade;
        } else {
            echo "Quantidade inválida! <br>";
        }
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function mostrarProduto() {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Preço: R$ " . $this->getPreco() . "<br>";
        echo "Quantidade: " . $this->getQuantidade() . "<br>";
    }
}

$produto = new Produto();
$produto->setNome("Arroz");
$produto->setPreco(25);
$produto->setQuantidade(10);

$produto->mostrarProduto();

?>
