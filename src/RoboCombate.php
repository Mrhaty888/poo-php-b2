<?php
namespace App;

use InvalidArgumentException;

class RoboCombate{

    private int $energiaBase;
    private int $integridadeBase;
    public function __construct(
        public string $nome,
        private int $energia,
        private int $integridade,
        private int $pontuacao=0,
    ){
        if ($energia <= 0 or $energia >100) {
            throw new InvalidArgumentException('Energia inválida.');
        }
        if ($integridade <= 0) {
            throw new InvalidArgumentException('Integridade inválida.');
        }
        $this->energiaBase = $energia;
        $this->integridadeBase = $integridade;
    }

    public function treinar(): int{
        if ($this->energia > 0 or $this->integridade > 0) {
            $energiaAnterior = $this->energia;
            $this->energia -= 20;
            if ($this->energia < 0) {
                $this->energia = 0;
                echo "Robo com energia zerada.".PHP_EOL;
                $this->pontuacao = 2*$energiaAnterior;
            } else {
                $this->pontuacao = 40;
            }
        } else {
            echo "Não foi possivel fazer essa ação. Recarregue o robo.".PHP_EOL;
        }
        return $this->pontuacao;
    }

    public function combate(): int{
        if ($this->energia > 0 and $this->integridade > 0) {
            $energiaAnterior = $this->energia;
            $this->energia -= 30;
            $this->integridade -= 30;
            if ($this->energia <0) {
                $this->energia = 0;
                echo "Seu robo perdeu o combate por falta de energia. Recarregue o robo.".PHP_EOL;
            } else if ($this->integridade <= 0) {
                echo "Seu robo perdeu a luta por estár muito danificado. Repare o robo.".PHP_EOL;
            } else {
                if ($this->energia >= 0 and $this->energia <= 30) {
                    echo "Seu robo venceu a luta mas está muito fraco, recarregue o robo".PHP_EOL;
                } else {
                    echo "Seu robo venceu a luta, parabéns.".PHP_EOL;
                }
                $this->pontuacao += 80;
            }
        } else {
            echo "Não foi possivel fazer essa ação. Recarregue o robo.".PHP_EOL;
        }
        return $this->pontuacao;
    }

    public function recarregar(int $percentual): int{
        if ($percentual > 0 and $percentual <= 100 and $this->energia < $this->energiaBase) {
            $this->energia += $percentual;
            if ($this->energia > $this->energiaBase) {
                $this->energia = $this->energiaBase;
                echo "Robo está com energia 100% renovada.".PHP_EOL;
            }

        } else {
            if ($this->energia == $this->energiaBase) {
                echo "Robo já está com 100% de energia.".PHP_EOL;
            } else {
                echo "Ação inválida.".PHP_EOL;
            }
        }
        return $this->energia;
    }

    public function reparar(int $reparo): int{
        if ($reparo > 0 and $reparo <= $this->integridadeBase and $this->integridade < $this->integridadeBase) {
            $this->integridade += $reparo;
            if ($this->integridade > $this->integridadeBase) {
                $this->integridade = $this->integridadeBase;
                echo "Robo está 100% reparado.".PHP_EOL;
            }

        } else {
            if ($this->integridade == $this->integridadeBase) {
                echo "Robo já está 100% reparado.".PHP_EOL;
            } else {
                echo "Ação inválida.".PHP_EOL;
            }
        }
        return $this->integridade;
    }

    public function status(): string{
        return "Nome: $this->nome | Energia: $this->energia | Integridade: $this->integridade | Pontuação: $this->pontuacao.";
    }
}
?>