<?php

class Usuario {

    private $login;
    private $senha;

    
    public function setLogin($novoLogin) {

        if (strlen($novoLogin) >= 4) {

            $this->login = $novoLogin;
        }
    }

    
    public function getLogin() {

        return $this->login;
    }

    
    public function setSenha($novaSenha) {

        if (strlen($novaSenha) >= 8) {

            $this->senha = $novaSenha;
        }
    }

    
    public function alterarSenha($novaSenha) {

        if (strlen($novaSenha) >= 8) {

            $this->senha = $novaSenha;
        }
    }

    
    public function autenticar($login, $senha) {

        if ($login == $this->login &&
            $senha == $this->senha) {

            echo "Login correto <br>";

        } else {

            echo "Login incorreto <br>";
        }
    }
}


$user = new Usuario();

$user->setLogin("luiza");

$user->setSenha("12345678");

$user->autenticar("luiza", "12345678");

$user->autenticar("luiza", "11111111");

$user->alterarSenha("87654321");

$user->autenticar("luiza", "87654321");

?>