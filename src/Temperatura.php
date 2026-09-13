<?php

namespace App;

use InvalidArgumentException;

class Temperatura{
    public function __construct(
        private float $celsius
    ){
        if ($celsius<=-273.15) {
            throw new InvalidArgumentException('Temperatura inválida');
        }
    }

    public function alterar(float $novoValor): bool{
        if ($novoValor<=-273.15) {
            throw new InvalidArgumentException('Temperatura inválida');
        }
        $this->celsius=$novoValor;
        return true;
    }

    public function emFahrenheit(): float{
        $fahrenheit = ($this->celsius*9/5) + 32;
        return $fahrenheit;
    }

    public function emKelvin(): float{
        $kelvin = $this->celsius + 273.15;
        return $kelvin;
    }

    public function descricao(): string{
        $fahrenheit = $this->emFahrenheit();
        $kelvin = $this->emKelvin();
        return "Celsius: $this->celsius | Fahrenheit: $fahrenheit | Kelvin: $kelvin";
    }
}

?>