<?php

namespace Alura\Banco\Model;

class Endereco {

    private string $rua;
    private string $numero;

    public function __construct(string $rua, string $numero) {
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function exibirEndereco(): string {
        return "Logadouro: {$this->rua}, Nº {$this->numero}";
    }
}

?>