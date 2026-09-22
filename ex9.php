<?php
//Nome:Marco Antônio Sancho Sant'Ana dos Santos | RA:2205946  | Turma: BCC - B | Disciplina: Programação orientada a objetos.
require __DIR__ . "/vendor/autoload.php";

use App\PersonagemRPG;

$personagem1 = new PersonagemRPG("Mario","Cavaleiro",100,50);
echo $personagem1->receberDano(50).PHP_EOL;
#echo $personagem1->receberDano(-110).PHP_EOL;
echo $personagem1->curar(10).PHP_EOL;
#echo $personagem1->curar(110).PHP_EOL;
echo $personagem1->usarHabilidade(50).PHP_EOL;
#echo $personagem1->usarHabilidade(-50).PHP_EOL;
echo $personagem1->descansar(40).PHP_EOL;
#echo $personagem1->usarHabilidade(60).PHP_EOL;
echo $personagem1->status().PHP_EOL;

?>