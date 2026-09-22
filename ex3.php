<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . '/vendor/autoload.php';

use App\IngressoCinema;

$nomeDoFilme = "Star wars: O retorno do jedi";
$ingresso1 = new IngressoCinema(30.50,false);
$ingresso1->filme = $nomeDoFilme;
$ingresso1->definirMeiaEntrada(true);
$ingresso1->calcularValorFinal();
echo $ingresso1->resumo().PHP_EOL;

$ingresso2 = new IngressoCinema(30.50,false);
$ingresso2->filme = $nomeDoFilme;
$ingresso2->definirMeiaEntrada(false);
$ingresso2->calcularValorFinal();
echo $ingresso2->resumo().PHP_EOL;
var_dump($ingresso1===$ingresso2);

?>