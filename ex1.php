<?php
require __DIR__ . '/vendor/autoload.php';

use App\Retangulo;

$retangulo1 = new Retangulo(17,18);
#$retangulo1 = new Retangulo(17,-18);
#$retangulo1 = new Retangulo(-17,18);
echo $retangulo1->area().PHP_EOL;
echo $retangulo1->perimetro().PHP_EOL;
if ($retangulo1->ehQuadrado()==true){
    echo "É quadrado.".PHP_EOL;
} else {
    echo "Não é quadrado".PHP_EOL;
}
$retangulo2 = new Retangulo(20,20);
echo $retangulo2->area().PHP_EOL;
echo $retangulo2->perimetro().PHP_EOL;
if ($retangulo2->ehQuadrado()==true){
    echo "É quadrado.".PHP_EOL;
} else {
    echo "Não é quadrado".PHP_EOL;
}
?>