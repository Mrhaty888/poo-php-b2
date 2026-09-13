<?php
    namespace App;

    use InvalidArgumentException;

    class Retangulo{
        public function __construct(
            private float $altura,
            private float $largura
        ){
            if ($altura<=0) {
                throw new InvalidArgumentException('Altura inválida.');
            }
            if ($largura<=0) {
                throw new InvalidArgumentException('Largura inválida.');
            }
        }

        public function area(): float{
            $area = $this->altura * $this->largura;
            return $area;
        }

        public function perimetro(): float{
            $perimetro = $this->altura * 2 + $this->largura * 2;
            return $perimetro;
        }

        public function ehQuadrado(): bool{
            if ($this->altura == $this->largura) {
                $quadrado = true;
            }
            else {
                $quadrado=false;
            }
            return $quadrado;
        }
    }
?>