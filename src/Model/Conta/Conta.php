<?php

namespace Alura\Banco\Model\Conta;

class Conta {

    private Titular $titular;
    private int $tipo;
    private float $saldo; 
    private float $limite;
    private float $tarifa;

    private static int $qtdContas = 0;

    public function __construct(Titular $titular, int $tipo, float $saldo) {
        $this->titular = $titular;
        $this->tipo = $tipo;
        $this->saldo = $saldo;
        $this->limite = 500.0;

        self::$qtdContas++;
    }

    public function __destruct() {
        self::$qtdContas--;
    }

    public function sacar(float $valorSaque): string {
        $tarifa = $this->percentualTarifa();
        $valorTarifa = $valorSaque * $tarifa;
        $valorAtualizado = $valorTarifa + $valorSaque;

        if ($this->saldo >= $valorAtualizado){
            $this->saldo -= $valorAtualizado;
            return "Saque de R$ {$valorSaque} realizado com sucesso e débitado tarifa de R$ {$valorTarifa} ({$tarifa})!";
        }
        return "Saldo Insuficiente!";
    }
    
    public function depositar(float $valor) {
        if ($valor > 0){
            $this->saldo += $valor;
            return True;
        }
        return False;
    }

    public function transferir(float $valor, Conta $conta) {
        if ($this->sacar($valor)) {
            $conta->depositar($valor);
            return True;
        }
        return False;
    }

    public static function exibirQtdContas() {
        return self::$qtdContas;
    }

    public function __toString(): string {
        return "{$this->titular->exibirTitular()} <br> Saldo: R$ {$this->saldo} <br> Limite: R$ {$this->limite}";
    }

    public function percentualTarifa(): float {
        if ($this->tipo === 1) {
            return 0.05;
        } else if ($this->tipo === 2) {
            return 0.03;
        }
    }

}

?>