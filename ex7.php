<?php
require __DIR__ . "/vendor/autoload.php";

use App\Semaforo;

$lugar = "Avenida Sampaio Vidal";
$transito = new Semaforo($lugar);
$transito->avancar();
echo $transito->podePassar().PHP_EOL;
echo $transito->estado().PHP_EOL;
$transito->avancar();
echo $transito->podePassar().PHP_EOL;
echo $transito->estado().PHP_EOL;
$transito->avancar();
echo $transito->podePassar().PHP_EOL;
echo $transito->estado().PHP_EOL;
$transito->avancar();
echo $transito->podePassar().PHP_EOL;
echo $transito->estado().PHP_EOL;
$transito->avancar();
echo $transito->podePassar().PHP_EOL;
echo $transito->estado().PHP_EOL;
$transito->avancar();
echo $transito->podePassar().PHP_EOL;
echo $transito->estado().PHP_EOL;
$transito->avancar();
echo $transito->podePassar().PHP_EOL;
echo $transito->estado().PHP_EOL;
?>