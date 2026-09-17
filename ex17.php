<?php
require __DIR__ . "/vendor/autoload.php";

use App\SmartLocker;

$pacote1 = new SmartLocker("Notebook");
$pacote1->receberPacote();
$pacote1->codigo("NotebOOK");
$pacote1->codigo("Livro");
$pacote1->retirarPacote(17345);

$pacote2 = new SmartLocker("Livro");
$pacote2->receberPacote();
$pacote2->codigo("NotebOOK");
$pacote2->codigo("Livro");
$pacote2->retirarPacote(17346);
$pacote2->retirarPacote(17347);
$pacote2->retirarPacote(17348);
$pacote2->retirarPacote(17345);
$pacote2->retirarPacote(17345);
$pacote2->destravar("Urso134");
$pacote2->destravar("Urso134@!");
?>