<?php

namespace App;

use InvalidArgumentException;

class Triangulo{
    public function __construct(
        private float $ladoA,
        private float $ladoB,
        private float $ladoC
    ){
        if ($ladoA<=0 or $ladoB<=0 or $ladoC<=0) {
            throw new InvalidArgumentException('Lado(s) inválido(s).');
        }
            
    }

    public function ehValido(): bool{
        if (($this->ladoA > $this->ladoB + $this->ladoC) or ($this->ladoB > $this->ladoA + $this->ladoC) or ($this->ladoC > $this->ladoB + $this->ladoA)) {
            throw new InvalidArgumentException('Não é triângulo.');
        }
        return true;
    }

    public function classificar(): string{
        if ($this->ladoA == $this->ladoB and $this->ladoB == $this->ladoC) {
            $classificacao = "Equilatero";
        }
        else if ($this->ladoA == $this->ladoB or $this->ladoB == $this->ladoC or $this->ladoA == $this->ladoC) {
                $classificacao = "Isóceles";
        }
        else {
            $classificacao = "Escaleno";
        }
        return $classificacao;
    }

    public function perimetro(): float{
        $validacao = $this->ehValido();
        $perimetro = $this->ladoA + $this->ladoB + $this->ladoC;
        return $perimetro; 
    }
}
?>