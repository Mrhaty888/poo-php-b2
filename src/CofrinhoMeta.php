<?php
namespace App;

use InvalidArgumentException;

class CofrinhoMeta{

public function __construct(
    public string $objetivo,
    private float $saldo,
    private float $meta
){
    if ($saldo < 0) {
        throw new InvalidArgumentException('Saldo inválido');
    }
    if ($meta <= 0) {
        throw new InvalidArgumentException('Meta inválida');
    }
}

public function depositar(float $valor): bool{
    if ($valor > 0) {
        $this->saldo = $this->saldo + $valor;
        return true;
    } else {
        echo "Valor inválido".PHP_EOL;
        return false;
    }
}

public function retirar(float $valor): bool{
    if ($valor > 0 and $valor <= $this->saldo) {
        $this->saldo = $this->saldo - $valor;
        return true;
    } else {
        echo "Valor inválido".PHP_EOL;
        return false;
    }
}

public function percentualDaMeta(): float{
    $porcentagem = ($this->saldo/$this->meta) * 100;
    if ($porcentagem > 100) {
        $porcentagem = 100;
    }
    return $porcentagem;
}

public function metaAtingida(): bool{
    if ($this->saldo >= $this->meta) {
        return true;
    } else {
        return false;
    }
}

public function resumo(): string{
    $porcentual = $this->percentualDaMeta();
    return "Objetivo: $this->objetivo | Saldo: $this->saldo | Meta: $this->meta | Progresso: $porcentual % .";
}
}
?>