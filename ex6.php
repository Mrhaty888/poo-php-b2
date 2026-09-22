<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . "/vendor/autoload.php";

use App\TicketEstacionamento;

$placa = "FHJ3H57";
$tarifa = 8.5;
#ticket1 = new TicketEstacionamento($placa,-15,$tarifa,null);
#ticket1->registrarSaida(55);
#echo $ticket1->resumo().PHP_EOL;

$ticket1 = new TicketEstacionamento($placa,15,$tarifa,null);
$ticket1->registrarSaida(55);
echo $ticket1->resumo().PHP_EOL;

$ticket2 = new TicketEstacionamento($placa,15,$tarifa,null);
$ticket2->registrarSaida(75);
echo $ticket2->resumo().PHP_EOL;

$ticket3 = new TicketEstacionamento($placa,15,$tarifa,null);
$ticket3->registrarSaida(135);
echo $ticket3->resumo().PHP_EOL;

?>