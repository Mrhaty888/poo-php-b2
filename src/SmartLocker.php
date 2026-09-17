<?php
namespace App;

use InvalidArgumentException;

class SmartLocker{
    private int $tentativasInvalidas = 0;
    private string $senhaADM = "Urso134@!";
    public function __construct(
        public string $encomenda,
        private int $codigo=0,
        private bool $emUso=false
    ){}

    public function receberPacote(): bool{
        if ($this->emUso==false) {
            echo "Pacote recebido".PHP_EOL;
            $this->codigo = 17345;
            $this->emUso = true;
            return true;
        } else {
            echo "Compartimento já em uso.".PHP_EOL;
            return false;
        }
    }

    public function codigo(string $nome): bool{
        if (strtolower($nome) == strtolower($this->encomenda)) {
            echo $this->codigo.PHP_EOL;
            return true;
        } else {
            echo "Pacote não encontrado".PHP_EOL;
            return false;
        }
    }

    public function retirarPacote(int $codigoEntrada): bool{
        if ($this->emUso == true) {
            if ($codigoEntrada === $this->codigo and $this->tentativasInvalidas<3) {
                echo "Compartimento aberto".PHP_EOL;
                $this->emUso=false;
                return true;
            } else {
                $this->tentativasInvalidas+=1;
                if ($this->tentativasInvalidas >= 3) {
                    echo "Limite de tentativas atingido, compartimento bloqueado".PHP_EOL;
                    return false;
                } else {
                echo "Código incorreto".PHP_EOL;
                return false;
                }
            }
        
        } else {
            echo "Pacote não cadastrado.".PHP_EOL;
            return false;
        }
    }

    public function destravar(string $senhaAdmnistrador): bool{
        if ($senhaAdmnistrador == $this->senhaADM) {
            echo "Compartimento destravado.".PHP_EOL;
            $this->emUso = false;
            return true;
        } else {
            echo "Senha incorreta".PHP_EOL;
            return false;
        }
    }



}
?>