<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . "/vendor/autoload.php";

use App\Cartaotransporte;

$cartao = new CartaoTransporte("Fernando",300,100);
#$cartao = new CartaoTransporte("Fernando",500,-10);
echo $cartao->recarregar(100).PHP_EOL;
echo $cartao->recarregar(0).PHP_EOL;
echo $cartao->embarcar().PHP_EOL;
echo $cartao->saldoAtual().PHP_EOL;
echo $cartao->viagensRealizadas().PHP_EOL;
echo $cartao->resumo().PHP_EOL;

echo $cartao->embarcar().PHP_EOL;
echo $cartao->saldoAtual().PHP_EOL;
echo $cartao->viagensRealizadas().PHP_EOL;
echo $cartao->resumo().PHP_EOL;

echo $cartao->embarcar().PHP_EOL;
echo $cartao->saldoAtual().PHP_EOL;
echo $cartao->viagensRealizadas().PHP_EOL;
echo $cartao->resumo().PHP_EOL;

echo $cartao->embarcar().PHP_EOL;
echo $cartao->saldoAtual().PHP_EOL;
echo $cartao->viagensRealizadas().PHP_EOL;
echo $cartao->resumo().PHP_EOL;

echo $cartao->embarcar().PHP_EOL;
echo $cartao->saldoAtual().PHP_EOL;
echo $cartao->viagensRealizadas().PHP_EOL;
echo $cartao->resumo().PHP_EOL;
?>