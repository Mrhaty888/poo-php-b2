<?php

namespace App;

use InvalidArgumentException;

class BateriaDispositivo{
    public function __construct(
        public string $dispositivo,
        private int $carga
    ){
        if ($carga < 0 or $carga > 100) {
            throw new InvalidArgumentException('Betria inválida');
        }
    }

    public function usar(int $minutos): bool{
        if ($this->carga>0){
        if ($minutos > 0) {
            $this->carga = $this->carga - round($minutos/5);
            if ($this->carga <= 0) {
                $this->carga=0;
                return false;
            } else {
                return true;
            }
        } else {
            throw new InvalidArgumentException('Minutagem inválida');
        }
        } else {
            throw new InvalidArgumentException('Bateria zerada');
        }
    }

    public function carregar(int $percentual): int{
        if ($percentual < 0 or $percentual > 100){
            throw new InvalidArgumentException('Percentual inválido');
        } else {
            $cargaanterior = $this->carga;
            $this->carga = $this->carga + $percentual;
            if ($this->carga > 100) {
                $this->carga = 100;
                return $this->carga - $cargaanterior;
            }
            return $percentual;
        }
    }

    public function nivel(): int{
        return $this->carga;
    }

    public function estaCritica(): bool{
        if ($this->carga <= 15) {
            echo "Situação crítica".PHP_EOL;
            return true;
        } else {
            echo "Situação não crítica".PHP_EOL;
            return false;
        }
    }

    public function status(): string{
        return "Dispositivo: $this->dispositivo | Nivel: $this->carga";
    }
}
?>