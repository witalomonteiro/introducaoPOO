<?php

namespace Alura\Banco\Model;

class Pessoa {

    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf) {
        $this->nome = $this->validarNome($nome);
        $this->cpf = $cpf;
    }

    private function validarNome(string $nome) {
        if (strlen($nome) >= 5) {
            return $nome;
        }
        // exit();
        return False;
    }

    public function exibirPessoa(): string {
        return "{$this->nome} {$this->cpf->exibirCPF()}";
    }
}

?>