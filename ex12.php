<?php
require __DIR__ . "/vendor/autoload.php";

use App\Hidrometro;

$hidrometro = new Hidrometro("João",100);
#$hidrometro = new Hidrometro("João",-100);
echo $hidrometro->registrarLeitura(105.5).PHP_EOL;
echo $hidrometro->consumoUltimoPeriodo().PHP_EOL;
echo $hidrometro->estimarConta(18).PHP_EOL;
#echo $hidrometro->estimarConta(-18).PHP_EOL;
echo $hidrometro->resumo().PHP_EOL;

echo $hidrometro->registrarLeitura(120).PHP_EOL;
echo $hidrometro->consumoUltimoPeriodo().PHP_EOL;
echo $hidrometro->estimarConta(18).PHP_EOL;
echo $hidrometro->resumo().PHP_EOL;

echo $hidrometro->registrarLeitura(200).PHP_EOL;
echo $hidrometro->consumoUltimoPeriodo().PHP_EOL;
echo $hidrometro->estimarConta(18).PHP_EOL;
echo $hidrometro->resumo().PHP_EOL;

echo $hidrometro->registrarLeitura(105.5).PHP_EOL;
?>