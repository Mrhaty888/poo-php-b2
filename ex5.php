<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . '/vendor/autoload.php';

use App\Triangulo;

$triangulo1 = new Triangulo(8,8,8);
$triangulo1->ehValido();
echo $triangulo1->classificar().PHP_EOL;
echo $triangulo1->perimetro().PHP_EOL;

$triangulo2 = new Triangulo(8,7,7);
$triangulo2->ehValido();
echo $triangulo2->classificar().PHP_EOL;
echo $triangulo2->perimetro().PHP_EOL;

$triangulo3 = new Triangulo(8,15,18);
$triangulo3->ehValido();
echo $triangulo3->classificar().PHP_EOL;
echo $triangulo3->perimetro().PHP_EOL;

#$triangulo4 = new Triangulo(0,1,2);
#$triangulo4 = new Triangulo(10,20,40);
#$triangulo4->ehValido();

?>