<?php
require __DIR__ . "/vendor/autoload.php";

use App\MaquinaSnack;

$cliente1 = new MaquinaSnack("Guarana Jesus",10);
$cliente1->reabastecer(3);
#$cliente1->reabastecer(-2).PHP_EOL;
$cliente1->inserirCredito(20);
#$cliente1->inserirCredito(20).PHP_EOL;
$cliente1->comprar();
echo $cliente1->resumo().PHP_EOL;
$cliente1->comprar();
echo $cliente1->resumo().PHP_EOL;
$cliente1->comprar();
echo $cliente1->resumo().PHP_EOL;
echo $cliente1->devolverCredito().PHP_EOL;
$cliente1->inserirCredito(20);
$cliente1->comprar();
echo $cliente1->resumo().PHP_EOL;
$cliente1->comprar();
echo $cliente1->devolverCredito().PHP_EOL;
$cliente1->reabastecer(3);
echo $cliente1->resumo().PHP_EOL;

?>