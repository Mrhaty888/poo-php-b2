<?php
namespace App;

use InvalidArgumentException;

class MaquinaSnack{
    public function __construct(
        public string $produto,
        private float $preco,
        private int $estoque = 0,
        private float $credito = 0
    ){
        if ($preco <0 ) {
            throw new InvalidArgumentException('Preço inválido.');
        }
    }

    public function reabastecer(int $quantidade): bool{
        if ($quantidade > 0 ) {
            $this->estoque = $this->estoque + $quantidade;
            return true;
        } else {
            echo "Quantidade de reabastecimento inválida.".PHP_EOL;
            return false;
        }
    }

    public function inserirCredito(float $valor): bool{
        if ($valor > 0 ) {
            $this->credito = $this->credito + $valor;
            return true;
        } else {
            echo "Valor inválido.".PHP_EOL;
            return false;
        }
    }

    public function comprar(): bool{
        if ($this->estoque > 0 and $this->credito >= $this->preco) {
            $this->estoque -= 1;
            $creditoMaquina = $this->credito - $this->preco;
            $this->credito-=$this->preco;
            return true;
        } else {
            echo "Compra inválida.".PHP_EOL;
            return false;
        }
    }

    public function devolverCredito(): float{
        $compra = $this->credito;
        $this->credito = 0;
        return $compra;
    }

    public function resumo(): string{
        return "Produto: $this->produto | Preço: $this->preco | Estoque: $this->estoque | Crédito: $this->credito";
    }
        
}
?>