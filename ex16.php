<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . "/vendor/autoload.php";

use App\PacoteEntrega;

$pacote1 = new PacoteEntrega("BR123456789X","Rua das Flores, 123");
$pacote1->sairParaEntrega();
$pacote1->registrarFalha();
echo $pacote1->statusAtual().PHP_EOL;
$pacote1->sairParaEntrega();
$pacote1->confirmarEntrega();
echo $pacote1->statusAtual().PHP_EOL;
$pacote1->sairParaEntrega();
$pacote1->sairParaEntrega();
$pacote1->sairParaEntrega();
$pacote1->sairParaEntrega();
echo $pacote1->statusAtual().PHP_EOL;

?>