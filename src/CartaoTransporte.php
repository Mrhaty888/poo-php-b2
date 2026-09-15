<?php

namespace App;

use InvalidArgumentException;

class CartaoTransporte{
    public function __construct(
        public string $titular,
        private float $saldo,
        private float $tarifa,
        private int $viagensRealizadas = 0
    ){
        if ($tarifa <=0) {
            throw new InvalidArgumentException('Tarifa inválida.');
        }
    }

    public function recarregar(float $valor): bool{
        if ($valor>0) {
            $this->saldo = $this->saldo + $valor;
            return true;
        } else {
            echo "Valor inválido";
            return false;
        }
    }

    public function embarcar(): bool{
        if ($this->saldo - $this->tarifa >= 0) {
            $this->saldo = $this->saldo - $this->tarifa;
            $this->viagensRealizadas += 1;
            return true;
        } else {
            echo "Saldo insuficiente para a viagem.";
            return false;
        }
    }

    public function saldoAtual(): float{
        return $this->saldo;
    }

    public function viagensRealizadas(): int{
        return $this->viagensRealizadas;
    }

    public function resumo(): string{
        return "Titular: $this->titular | Saldo: $this->saldo | Viagens realizadas: $this->viagensRealizadas .";
    }
}
?>