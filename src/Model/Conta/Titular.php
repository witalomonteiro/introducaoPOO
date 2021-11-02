<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\{Pessoa, Endereco, CPF};

class Titular extends Pessoa {

    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco) {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function exibirTitular(): string {
        return "Nome: {$this->nome} <br> {$this->cpf->exibirCPF()} <br> {$this->endereco->exibirEndereco()}";
    }

}

?>