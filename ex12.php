<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
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