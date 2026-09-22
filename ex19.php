<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . "/vendor/autoload.php";

use App\RoboCombate;

$Robo1 = new RoboCombate("Megatron",80,130);
#$Robo1 = new RoboCombate("Megatron",0,130);
#$Robo1 = new RoboCombate("Megatron",80,0);
#$Robo1 = new RoboCombate("Megatron",-80,130);
#$Robo1 = new RoboCombate("Megatron",80,-130);
echo $Robo1->treinar().PHP_EOL;
echo $Robo1->status().PHP_EOL;
echo $Robo1->combate().PHP_EOL;
echo $Robo1->combate().PHP_EOL;
echo $Robo1->combate().PHP_EOL;
echo $Robo1->status().PHP_EOL;
#echo $Robo1->recarregar(100).PHP_EOL;
#echo $Robo1->recarregar(-100).PHP_EOL;
#echo $Robo1->recarregar(0).PHP_EOL;
echo $Robo1->recarregar(80).PHP_EOL;
echo $Robo1->status().PHP_EOL;
echo $Robo1->reparar(100).PHP_EOL;
#echo $Robo1->reparar(-100).PHP_EOL;
#echo $Robo1->reparar(0).PHP_EOL;
echo $Robo1->status().PHP_EOL;

$Robo2 = new RoboCombate("Optimus Prime",100,110);
echo $Robo2->treinar().PHP_EOL;
echo $Robo2->status().PHP_EOL;
echo $Robo2->combate().PHP_EOL;
echo $Robo2->combate().PHP_EOL;
echo $Robo2->combate().PHP_EOL;
echo $Robo2->status().PHP_EOL;
echo $Robo2->recarregar(80).PHP_EOL;
echo $Robo2->recarregar(100).PHP_EOL;
echo $Robo2->recarregar(18).PHP_EOL;
echo $Robo2->status().PHP_EOL;
echo $Robo2->reparar(100).PHP_EOL;
echo $Robo2->status().PHP_EOL;
?>