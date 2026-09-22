<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . "/vendor/autoload.php";

use App\DroneInspecao;

$drone = new DroneInspecao("DJI Neo",50);
#$drone = new DroneInspecao("DJI Neo",-50);
#$drone = new DroneInspecao("DJI Neo",500);
$drone->decolar();
$drone->decolar();
$drone->voar(5.5);
echo $drone->status().PHP_EOL;
$drone->voar(10);
echo $drone->status().PHP_EOL;
#$drone->voar(-5.5);
$drone->pousar();
echo $drone->status().PHP_EOL;
#$drone->pousar();
$drone->recarregar(62);
echo $drone->status().PHP_EOL;
$drone->recarregar(100);
echo $drone->status().PHP_EOL;
#$drone->recarregar(-100);
?>