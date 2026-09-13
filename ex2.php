<?php
require __DIR__ . '/vendor/autoload.php';

use App\Temperatura;

$temperatura1 = new Temperatura(23.12);
$temperatura1->alterar(17.25);
$temperatura1->emFahrenheit();
$temperatura1->emKelvin();
echo $temperatura1->descricao().PHP_EOL;

$temperatura2 = new Temperatura(-100.12);
#$temperatura2->alterar(-274);
$temperatura2->emFahrenheit();
$temperatura2->emKelvin();
echo $temperatura2->descricao().PHP_EOL;
?>