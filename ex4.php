<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . '/vendor/autoload.php';

use App\CronometroTreino;

$tempo1 = new CronometroTreino("Cardio");
$tempo1->adicionarTempo(120);
#$tempo1->adicionarTempo(0);
#$tempo1->adicionarTempo(-17);
$tempo1->adicionarTempo(3600);
$tempo1->adicionarTempo(60);
echo $tempo1->totalMinutos().PHP_EOL;
echo $tempo1->formatarTempo().PHP_EOL;
$tempo1->zerar();
echo $tempo1->formatarTempo();
?>