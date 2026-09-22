<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
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