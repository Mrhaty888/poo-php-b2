<?php
namespace App;

use invalidArgumentException;

class Astronauta{
    private int $vidaMaxima;
    private int $energiaMaxima;
    private int $distanciaPercorrida=0;

    public function __construct(
        public string $nome,
        private int $vida,
        private int $energia,
        private int  $oxigenio=100,
        private int $cargas=1,
        private bool $resgatado = false
    ){ 
        if ($vida < 0) {
            throw new invalidArgumentException('Vida inválida.');
        }
        if ($energia < 0) {
            throw new invalidArgumentException('Energia inválida.');
        }

        $this->vidaMaxima = $vida;

        $this->energiaMaxima = $energia;

    }

    public function explorar(int $metros): void{
        if ($this->vida > 0 and $this->energia > 0 and $this->oxigenio > 0 and $this->resgatado==false and $metros > 0) {
            $energiaRestante = $this->energia;
            echo "Explorando . . .".PHP_EOL;
            $this->energia -= round($metros/2);
            $this->oxigenio -= round($metros/4);
            if ($this->energia < 0) {
                echo "O astronauta percorreu ".($energiaRestante*2)." metros mas está sem energia, reernegize ele agora".PHP_EOL;
                $this->distanciaPercorrida += $energiaRestante*2;
                $this->energia=0;
                if ($this->oxigenio < 0) {
                echo "O astronauta percorreu ".($energiaRestante*2)." mteros mas está sem oxigênio.".PHP_EOL;
                $this->oxigenio=0;
            }
            }
            else if ($this->oxigenio < 0) {
                echo "O astronauta percorreu ".$metros." metros mas está sem oxigênio.".PHP_EOL;
                $this->oxigenio=0;
            } else {
                echo "O astronauta percorreu $metros metros.".PHP_EOL;
            }
    } else {
            echo "Não foi possivel para o astronauta explorar.".PHP_EOL;
        }
    }

    public function descansar(int $energiaGanha): int{
        if ($this->vida > 0 and $this->oxigenio > 0 and $this->resgatado == false and $energiaGanha > 0) {
            if ($energiaGanha <= $this->energiaMaxima) {
                $this->energia += $energiaGanha;
                if ($this->energia > $this->energiaMaxima) {
                    $this->energia = $this->energiaMaxima;
                    echo "O astronauta está 100% reenergizado : ";
                } else {
                    echo "Energia: ";
                }
            } else {
               echo "Energia inválida.".PHP_EOL; 
            }
        } else {
            echo "Não foi possivel para o astronauta recuperar energia.".PHP_EOL;
        }
        return $this->energia.PHP_EOL;
    }

    public function recuperarOxigenio(): int{
        if ($this->cargas > 0 and $this->resgatado == false) {
            $this->oxigenio = 100;
            $this->cargas -= 1;
            echo "Oxigênio recuperado.".PHP_EOL;
            echo "Cargas restantes:";
        } else {
            echo "Não foi possivel o astronauta recuperar oxigênio por falta de cargas.".PHP_EOL;
            if ($this->resgatado==false) {
                echo "O astronauta está morrendo, resgate-o agora!".PHP_EOL;
                $this->vida=0;
            }
        }
        return $this->cargas;
    }

    public function resgatar(): void{
        if ($this->vida==0) {
        $this->resgatado=true;
        echo "O astronauta esta à salvo. Missão concluida.".PHP_EOL;
        $this->vida = $this->vidaMaxima;
        $this->oxigenio = 100;
        $this->energia = $this->energiaMaxima;
        } else {
            echo "O astronauta ainda está com vida suficiente. Continue explorando".PHP_EOL;
        }
    }

    public function status(): string{
        if ($this->resgatado) {
            $estado = "Sim";
        } else {
            $estado = "Não";
        }
        return "Astronauta: $this->nome | Vida: $this->vida | Energia: $this->energia | Oxigênio: $this->oxigenio | Cargas restantes: $this->cargas | Distância percorrida: $this->distanciaPercorrida | Resgatado: $estado.";
    }

}
?>