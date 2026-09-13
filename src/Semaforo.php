<?php

namespace App;

use InvalidArgumentException;

class Semaforo{
    public function __construct(
        public string $local,
        private string $cor="vermelho",
        private int $ciclosCompletos=0,
    ){}

    public function avancar(): void{
        if ($this->cor=="vermelho") {
            $this->cor = "verde";
        } 
        else if ($this->cor=="verde"){
            $this->cor = "amarelo";
        }
        else {
            $this->cor = "vermelho";
            $this->ciclosCompletos +=1;
        }
    }

    public function podePassar(): bool{
        if ($this->cor=="verde") {
            $estado=true;
        } else {
            $estado=false;
        }
        return $estado;
    }

    public function estado(): string{
        return "Local: $this->local | Cor: $this->cor | Ciclos completos: $this->ciclosCompletos";
    }
}
?>