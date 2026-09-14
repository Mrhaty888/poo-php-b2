<?php
namespace App;

use InvalidArgumentException;

class PersonagemRPG{
    public function __construct(
        public string $nome,
        public string $classe,
        private int $vida,
        private int $energia
    ){
        if ($vida < 0 or $vida >100) {
            throw new InvalidArgumentExceptiob('Vida inválida.');
        }
        if ($energia < 0 or $energia > 100) {
            throw new InvalidArgumentExceptiob('Energia inválida.');
        }
    }

    public function receberDano(int $pontos): bool{
        if ($this->vida > 0 and $pontos > 0) {
            if ($pontos > $this->vida){
                $this->vida=0;
            } else {
               $this->vida = $this->vida - $pontos; 
            }
            return true;
        } else {
            echo "Dano inválido";
            return false;
        }
    }

    public function curar(int $pontos): bool{
    if ($this->vida > 0 and $pontos <= 100 and $pontos>0) {
            if ($pontos + $this->vida > 100){
                $this->vida=100;
            } else {
               $this->vida = $this->vida + $pontos; 
            }
            return true;
        } else {
            echo "Cura inválida.";
            return false;
        }
    } 
    
    public function usarHabilidade(int $custoEnergia): bool{
        if ($this->vida > 0 and $custoEnergia <= $this->energia) {
            $this->energia=$this->energia-$custoEnergia;
            return True;
        } else {
            echo "Uso inválido";
            return false;
        }
    }

    public function descansar(int $pontos): bool{
        if ($this->vida > 0) {
            if ($this->energia + $pontos > 100) {
                $this->energia=100;
            } else {
                $this->energia=$this->energia+$pontos;
            }
            return True;
        } else {
            echo "Uso inválido";
            return false;
        }
    }

    public function status(): string{
        return "Personagem: $this->nome | Classe: $this->classe | Vida: $this->vida | Energia: $this->energia ";
    }
    }
?>