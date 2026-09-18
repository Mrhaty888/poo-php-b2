<?php
namespace App;

use InvalidArgumentException;

class DadosMovel{

public function __construct(
    public string $identificador,
    private float $dados=0,
    private int $franquia=0,
){}

public function pagarPlano5G(): void{
    $this->franquia = 5;
    $this->dados = $this->franquia;
}

public function pagarPlano4G(): void{
    $this->franquia = 4;
    $this->dados = $this->franquia;
}

public function verVideo1080p(float $horas): bool{
    if ($horas >0) {
        if ($this->dados != 0) {
        $dadosAntigos = $this->dados;
        $this->dados -= 1.5*$horas;
        if ($this->dados < 0) {
                $this->dados = 0;
                echo "Você usou $dadosAntigos Gb.Seu saldo está zerado.".PHP_EOL;
        } else {
            echo "Você usou ".$horas*1.5."Gb".PHP_EOL;
        }
        return true;
        } else {
            echo "Você não pode fazer essa ação pois seu saldo está zerado.".PHP_EOL;
            return false;
        }
        }
    else {
        echo "Horas inválidas.".PHP_EOL;
        return false;
    }
}

public function spotify(float $horas): bool{
    if ($horas >0) {
        if ($this->dados != 0) {
        $dadosAntigos = $this->dados;
        $this->dados -= 0.3*$horas;
        if ($this->dados < 0) {
                $this->dados = 0;
                echo "Você usou $dadosAntigos Gb.Seu saldo está zerado.".PHP_EOL;
        } else {
            echo "Você usou".$horas*0.3."Gb".PHP_EOL;
        }
        return true;
        } else {
            echo "Você não pode fazer essa ação pois seu saldo está zerado.".PHP_EOL;
            return false;
        }
        }
    else {
        echo "Horas inválidas.".PHP_EOL;
        return false;
    }
}

public function JogoOnline(float $horas): bool{
    if ($horas >0) {
        if ($this->dados != 0) {
        $dadosAntigos = $this->dados;
        $this->dados -= 0.1*$horas;
        if ($this->dados < 0) {
                $this->dados = 0;
                echo "Você usou $dadosAntigos Gb.Seu saldo está zerado.".PHP_EOL;
        } else {
            echo "Você usou".$horas*0.1."Gb".PHP_EOL;
        }
        return true;
        } else {
            echo "Você não pode fazer essa ação pois seu saldo está zerado.".PHP_EOL;
            return false;
        }
        }
    else {
        echo "Horas inválidas.".PHP_EOL;
        return false;
    }
}

public function pagarPacote(): void{
    $this->dados += 2;
    $this->franquia += 2;
}

public function status(): string{
    return "Usuário: $this->identificador | Saldo de dados: $this->dados | Dados comprados: $this->franquia. ";
}
}

?>