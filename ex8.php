<?php
require __DIR__ . "/vendor/autoload.php";

use App\LampadaInteligente;

$local = "sala";

$lampada1 = new LampadaInteligente($local);
$lampada1->desligar();
$lampada1->ligar();
echo $lampada1->ajustarIntensidade(40).PHP_EOL;
echo $lampada1->status().PHP_EOL;

$lampada2 = new LampadaInteligente($local);
$lampada2->ligar();
$lampada2->desligar();
echo $lampada2->ajustarIntensidade(18).PHP_EOL;
#echo $lampada2->ajustarIntensidade(110).PHP_EOL;
#echo $lampada2->ajustarIntensidade(-20).PHP_EOL;
echo $lampada2->status().PHP_EOL;
?>