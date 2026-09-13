<?php

namespace App;

use InvalidArgumentException;

class TicketEstacionamento{
    public function __construct(
        public string $placa,
        private int $entradaMin,
        private float $tarifahora,
        private ?int $saidaMin
    ){
        if (strlen($placa)==0) {
            throw new InvalidArgumentException('Placa inválida.');
        }

        if ($entradaMin<=0) {
            throw new InvalidArgumentException('Entrada inválida.');
        }
    }

    public function registrarSaida(int $minutos): bool{
        if ($minutos<0) {
            throw new InvalidArgumentException('Minutagem inválida');
        }

        if ($minutos>=0) {
            $validacao = true;
            $this->saidaMin = $minutos;
        } else {
            $validacao = false;
        }
        return $validacao;
    }

    public function duracaoMin(): int{
            return $this->saidaMin - $this->entradaMin; 
    }

    public function valorAPagar(): float{
            $duracao=$this->duracaoMin();
            return $this->tarifahora * round($duracao/60);
    }

    public function resumo(): string{
        $duracao=$this->duracaoMin();
        $valor=$this->valorAPagar();
        return "Placa: $this->placa | Duração em minutos: $duracao | valor: $valor";
    }


}
?>