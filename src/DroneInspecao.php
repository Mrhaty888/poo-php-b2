<?php

namespace App;

use InvalidArgumentException;

class DroneInspecao{

    public function __construct(
        public string $modelo,
        private int $bateria,
        private float $distanciaTotal=0,
        private bool $emVoo=false
    ){
        if ($bateria < 0 or $bateria > 100) {
            throw new InvalidArgumentException('Bateria inválida');
        }
    }

    public function decolar(): bool{
        if ($this->bateria >= 20 and $this->emVoo==false) {
            echo "Decolando . . .".PHP_EOL;
            $this->emVoo = true;
            return true;
        }else{
            if ($this->emVoo==true) {
                echo "Drone já em uso.".PHP_EOL;
            } else {
                echo "Bateria baixa demais.".PHP_EOL;
            }
            return false;
        }
    }

    public function voar(float $km): bool{
        if ($this->emVoo==true and $this->bateria > 0 and $km > 0) {
            echo "Voando . . .".PHP_EOL;
            $bateriaAntiga = $this->bateria;
            $this->bateria = round($this->bateria - 5*$km);        
            if ($this->bateria < 0) {
                $this->bateria=0;
                $this->distanciaTotal += $bateriaAntiga/5 ;  
            } else {
                $this->distanciaTotal += $km ;
            }
            return true;
    } else {
        echo "Não foi possivel fazer a viagem.".PHP_EOL;
        return false;
    }
    }

    public function pousar(): bool{
        if ($this->emVoo==true) {
            echo "Pousando . . .".PHP_EOL;
            $this->emVoo=false;
            return true;
        } else {
            echo "Não foi possivel fazer essa ação.".PHP_EOL;
            return false;
        }
    }

    public function recarregar(int $percentual): int{
        if ($percentual > 0 and $this->emVoo==false){
            if ($this->bateria==100){
                echo "Batéria já esta totalmente carregada".PHP_EOL;
            } else {
                echo "Recarregando . . .".PHP_EOL;
                $this->bateria += $percentual;
                if ($this->bateria > 100) {
                    $this->bateria = 100;
                }
                echo "Recarregamento completo".PHP_EOL;
            }
            return $this->bateria;
        } else {
            throw new InvalidArgumentException('Percentual inválido');
        }
    }

    public function status(): string{
        if ($this->emVoo) {
            $situacao = "Voando.";
        } else {
            $situacao = "Em repouso";
        }
        return "Bateria: $this->bateria | Distância: $this->distanciaTotal | Estado do drone: $situacao.";
    }
    }
?>