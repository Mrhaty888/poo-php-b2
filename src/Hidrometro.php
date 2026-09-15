<?php

namespace App;

use InvalidArgumentException;

class Hidrometro{
    public function __construct(
        public string $identificacao,
        private float $leituraAnterior,
        private float $leituraAtual = 0
    ){if ($leituraAnterior<0) {
        throw new InvalidArgumentException('Leitura inválida');
    } else if ($leituraAtual == 0) {
        $this->leituraAtual = $leituraAnterior;
    }
    }

    public function registrarLeitura(float $novaLeitura): bool{
        if ($novaLeitura >= $this->leituraAtual) {
            $this->leituraAnterior = $this->leituraAtual;
            $this->leituraAtual = $novaLeitura;
            return true;
        } else {
            echo "Leitura inválida.";
            return false;
        }
    }

    public function consumoUltimoPeriodo(): float{
        return $this->leituraAtual - $this->leituraAnterior;
    }

    public function estimarConta(float $precoPorM3): float{
        if ($precoPorM3 < 0) {
            throw new InvalidArgumentException('Preço inválido');
        } else {
            $consumo = $this->consumoUltimoPeriodo();
            return $consumo * $precoPorM3;
        }
    }

    public function resumo(): string{
        $consumo = $this->consumoUltimoPeriodo();
        return "Leitura anterior: $this->leituraAnterior | Leitura atual: $this->leituraAtual | Consumo: $consumo .";
    }
}
?>