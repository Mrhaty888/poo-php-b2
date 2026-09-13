<?php
namespace App;

use InvalidArgumentException;

class CronometroTreino{
    public function __construct(
        public string $atividade,
        private int $segundosAcumulados=0
    ){
        if (strlen($atividade)==0){
            throw new InvalidArgumentException('Atividade inválida');
        }
    }
    
    public function adicionarTempo(int $segundos): bool{
        if ($segundos<=0) {
            throw new InvalidArgumentException('Tempo inválido');
        }
        $this->segundosAcumulados=$this->segundosAcumulados + $segundos;
        return true;
    }

    public function zerar(): void{
        $this->segundosAcumulados=0;
    }

    public function totalMinutos(): float{
        $restoMinutos = $this->segundosAcumulados%60;
        return ($this->segundosAcumulados - $restoMinutos) / 60;
    }

    public function formatarTempo(): string{
        $restohoras = $this->segundosAcumulados%3600;
        $horas = ($this->segundosAcumulados - $restohoras)/3600;
        $minutos = $this->totalMinutos();
        $minutos = $minutos%60;
        $segundosRestantes = $restohoras;
        $segundos = $segundosRestantes % 60;
        return "Atividade : $this->atividade | Tempo: $horas : $minutos : $segundos";
    }
}
?>