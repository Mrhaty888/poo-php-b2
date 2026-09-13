<?php

namespace App;

use InvalidArgumentException;

class IngressoCinema{
    public string $filme;
    public function __construct(
        private float $precoBase,
        private bool $meiaEntrada
    ){
        if ($precoBase <=0) {
            throw new InvalidArgumentException('Preço base inválido');
        }
    }

    public function calcularValorFinal(): float{
        if ($this->meiaEntrada==true) {
            $precoFinal=$this->precoBase*0.5;
        } else {
            $precoFinal=$this->precoBase;
        }
        return $precoFinal;

    }

    public function definirMeiaEntrada(bool $possuiDireito): void{
        if ($possuiDireito==true) {
            $this->meiaEntrada=true;
        } else {
            $this->meiaEntrada=false;
        }
    }

    public function resumo(): string{
        if ($this->meiaEntrada==true) {
            $mensagem = "Meia-entrada.";
        } else {
            $mensagem = "Inteiro";
        }
        $preco=$this->calcularValorFinal();
        return "Filme: {$this->filme} | Tipo de ingresso: $mensagem | Preço final: $preco ";
    }
}

?>