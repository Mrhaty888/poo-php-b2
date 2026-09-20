<?php
require __DIR__ . "/vendor/autoload.php";

use App\Astronauta;

$Astronauta = new Astronauta("Armstrong III",100,120);
#$Astronauta = new Astronauta("Armstrong III",-100,120);
#$Astronauta = new Astronauta("Armstrong III",-100,-120);
$Astronauta->explorar(50);
#$Astronauta->explorar(-50);
echo $Astronauta->status().PHP_EOL;
$Astronauta->explorar(200);
echo $Astronauta->status().PHP_EOL;
echo $Astronauta->descansar(130).PHP_EOL;
echo $Astronauta->descansar(100).PHP_EOL;
echo $Astronauta->descansar(30).PHP_EOL;
#echo $Astronauta->descansar(-30).PHP_EOL;
$Astronauta->explorar(200);
$Astronauta->explorar(200);
echo $Astronauta->status().PHP_EOL;
echo $Astronauta->recuperarOxigenio().PHP_EOL;
echo $Astronauta->descansar(120).PHP_EOL;
$Astronauta->explorar(200);
echo $Astronauta->status().PHP_EOL;
$Astronauta->explorar(100);
echo $Astronauta->status().PHP_EOL;
echo $Astronauta->descansar(100).PHP_EOL;
$Astronauta->explorar(110);
echo $Astronauta->status().PHP_EOL;
echo $Astronauta->recuperarOxigenio().PHP_EOL;
echo $Astronauta->resgatar();
#Astronauta regatado não pode mais fazer nenhuma ação.
$Astronauta->explorar(100);
echo $Astronauta->descansar(100).PHP_EOL;
echo $Astronauta->recuperarOxigenio().PHP_EOL;
echo $Astronauta->status().PHP_EOL;
?>