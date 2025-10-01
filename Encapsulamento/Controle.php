<?php 
    require_once 'Controlador.php';

    class Controle implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;  


        function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        public function ligar() {
            if(!$this->getLigado()) {
                $this->setLigado(true);
            } else {
                echo "Já está ligado!";
            }
        }
        public function desligar() {
            if($this->getLigado()) {
                $this->setLigado(false);
            } else {
                echo "Já está desligado!";
            }
        }

        public function abrirMenu() {
            echo "\n\n-------MENU-------\n";
            echo "\nO controle está: " . ($this->getLigado() ? "Ligado\n" : "Desligado\n"); 
            echo "O controle " . ($this->getTocando() ? "está tocando" : " não está tocando\n");
            echo "Volume: " . $this->getVolume() . " ";
            for($i=0; $i <= $this->getVolume(); $i+=2) {
                echo "|";
            }
        }
        public function fecharMenu() {

        }
        public function aumentarVolume() {
            if ($this->getVolume() < 100) {
                $this->setVolume($this->getVolume() + 2);
            } else {
                echo "O volume está no máximo!";
            }
        }
        public function diminuirVolume() {
            if ($this->getVolume() > 0) {
                $this->setVolume($this->getVolume() - 2);
            } else {
                echo "O volume está no mínimo!";
            }
        }
        public function ativarMudo() {
            if ($this->getVolume() > 0) {
                $this->setVolume(0);
            } else {
                echo "O volume já está mudo!";
            }
        }
        public function desativarMudo() {
            if ($this->getVolume() == 0) {
                $this->setVolume(50);
            } else {
                echo "O volume já está ativado!";
            }
        }
        public function play() {
            if ($this->getLigado() && ! $this->getTocando()) {
                $this->setTocando(true);
            } else {
                echo "Não consegui reproduzir!";
            }
        }
        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(true);
            } else {
                echo "Não consegui pausar!";
            }
        }



        public function getTocando() {
                return $this->tocando;
        }

        public function setTocando($tocando) {
                $this->tocando = $tocando;

                return $this;
        }

        public function getLigado() {
                return $this->ligado;
        }

        public function setLigado($ligado) {
                $this->ligado = $ligado;

                return $this;
        }

        public function getVolume() {
                return $this->volume;
        }
        public function setVolume($volume){
                $this->volume = $volume;

                return $this;
        }
    }

?>