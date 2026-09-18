<?php
require __DIR__ . "/vendor/autoload.php";

use App\DadosMovel;

$plano1 = new DadosMovel("Diego");
$plano1->pagarPlano4G();
echo $plano1->status().PHP_EOL;
#$plano1->verVideo1080p(1.7);
#$plano1->verVideo1080p(0);
$plano1->verVideo1080p(-1.7);
echo $plano1->status().PHP_EOL;
$plano1->spotify(2);
$plano1->jogoOnline(1.5);
echo $plano1->status().PHP_EOL;

$plano2 = new DadosMovel("Fernanda");
$plano2->pagarPlano5G();
echo $plano2->status().PHP_EOL;
$plano2->verVideo1080p(1.7);
echo $plano2->status().PHP_EOL;
$plano2->spotify(2);
$plano2->jogoOnline(1.5);
$plano2->verVideo1080p(1.7);
$plano2->verVideo1080p(1.7);
$plano2->pagarPacote();
echo $plano2->status().PHP_EOL;
?>