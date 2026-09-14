<?php
require __DIR__ . "/vendor/autoload.php";

use App\CofrinhoMeta;

$cofrinho = new CofrinhoMeta("Ir pra Alemãnha",500,10000);
$cofrinho->depositar(2000);
#$cofrinho->depositar(-100);
$cofrinho->retirar(1000);
#$cofrinho->retirar(-1000);
echo $cofrinho->percentualDaMeta().PHP_EOL;
echo $cofrinho->metaAtingida().PHP_EOL;
echo $cofrinho->resumo().PHP_EOL;

$cofrinho->depositar(3400);
$cofrinho->retirar(500);
echo $cofrinho->percentualDaMeta().PHP_EOL;
echo $cofrinho->metaAtingida().PHP_EOL;
echo $cofrinho->resumo().PHP_EOL;

$cofrinho->depositar(7000);
$cofrinho->retirar(500);
echo $cofrinho->percentualDaMeta().PHP_EOL;
echo $cofrinho->metaAtingida().PHP_EOL;
echo $cofrinho->resumo().PHP_EOL;
?>