<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . "/vendor/autoload.php";

use App\BateriaDispositivo;

$fone = new BateriaDispositivo("Fone Headset",50);
#$fone = new BateriaDispositivo("Fone Headset",-50);
$fone->usar(60);
#$fone->usar(-60);
echo $fone->status().PHP_EOL;
$fone->estaCritica();
$fone->usar(120);
$fone->usar(100);
#$fone->usar(1);
echo $fone->status().PHP_EOL;
$fone->estaCritica();
#echo $fone->carregar(101).PHP_EOL;
#echo $fone->carregar(-99).PHP_EOL;
echo $fone->carregar(10).PHP_EOL;
echo $fone->status().PHP_EOL;
echo $fone->carregar(99).PHP_EOL;
echo $fone->status().PHP_EOL;


?>