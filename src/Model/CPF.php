<?php

namespace Alura\Banco\Model;

class CPF {
    private string $numero;

    public function __construct(string $numero) {
        $this->numero = $this->validarCPF($numero);
    }

    private function validarCPF(string $numero) {
        if (strlen($numero) == 11) {
            return $numero;
        }
        return False;
    }

    public function exibirCPF(): string {
        return "CPF: {$this->numero}";
    }

}

?>