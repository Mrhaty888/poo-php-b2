<?php

namespace App;

use InvalidArgumentException;

class LampadaInteligente{
    public function __construct(
        public string $comodo,
        private bool $ligada=false,
        private int $intensidade=50,
    ){}

    public function ligar(): void{
        $this->ligada=true;
    }

    public function desligar(): void{
        $this->ligada=false;
    }

    public function ajustarIntensidade(int $valor): bool{
        if ($valor<0 or $valor>100) {
            throw new InvalidArgumentException('Valor inválido.');
        }
        $this->intensidade = $valor;
        return true;
    }

    public function status(): string{
        if ($this->ligada==true) {
            $estado = "Ligada";
        } else {
            $estado = "Desligada";
        }
        return "Comodo: $this->comodo | Estado: $estado | Intensidade: $this->intensidade.";
    }
}
?>