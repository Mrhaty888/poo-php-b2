<?php
namespace App;

use InvalidArgumentException;

class PacoteEntrega{

    private int $tentativasInvalidas=0;

    public function __construct(
        public string $codigo,
        public string $destino,
        private string $status = "Aguardando",
        private int $tentativas = 0
    ){}

    public function sairParaEntrega(): bool{
        if ($this->tentativasInvalidas==3) {
                echo "Ação bloqueada,Pacote retornado ao remetente.".PHP_EOL;
                $this->status = "devolução";
                return false;
        } else {
            if ($this->status=="Aguardando") {
                echo "Viajando . . .".PHP_EOL;
                $this->tentativas += 1;
                $this->status = "Em viagem";
                return true;
            } else {
                echo "Tentativa inválida.".PHP_EOL;
                $this->tentativasInvalidas += 1;
                return false;
            }
        }
        
    }

    public function registrarFalha(): bool{
        if ($this->status=="Em viagem") {
            echo "Falha detectada, objeto voltando ao estado de aguardo.".PHP_EOL;
            $this->status="Aguardando";
            return true;
        } else {
            echo "O objeto não está em viagem".PHP_EOL;
            return false;
        }
    }

    public function confirmarEntrega(): bool{
        if ($this->status=="Em viagem") {
            echo "Pacote entregue.".PHP_EOL;
            $this->status = "Entregue";
            return true;
        } else {
            echo "O objeto não está em viagem".PHP_EOL;
            return false;
        }
    }

    public function statusAtual(): string{
        return "Status: $this->status | Tentativas: ".$this->tentativas + $this->tentativasInvalidas." .";
    }
}
?>