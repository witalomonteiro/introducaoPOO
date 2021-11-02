<?php

namespace Alura\Banco\Model;

class Funcionario extends Pessoa {

    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario) {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function exibirCargo(): string {
        return "Cargo: {$this->cargo}, Salario: R$ {$this->salario}";
    }

}

?>