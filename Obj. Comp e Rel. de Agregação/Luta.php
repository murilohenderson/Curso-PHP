<?php 
    class Luta {
        private $desafiado;
        private $desafiante;
        private $vencedor;
        private $rounds;
        private $aprovado;
 

        public function marcarLuta($lutador1, $lutador2) {
            if($lutador1->getCategoria() === $lutador2->getCategoria() && $lutador1 !== $lutador2) {
                echo "<p>Luta marcada entre " . $lutador1->getNome() . " e " . $lutador2 -> getNome() . "</p>\n";
                $this -> aprovado = true;
                $this -> desafiado = $lutador1;
                $this -> desafiante = $lutador2;
            } else {
                echo "<p>Luta não pode ser marcada</p>\n";
                $this -> aprovado = false;
                $this -> desafiado = null;
                $this -> desafiante = null;
            }
        }
        public function lutar($lutador1, $lutador2) {
            if ($this -> aprovado) {
                $this -> desafiado -> apresentar();
                $this -> desafiante -> apresentar();
                $this -> vencedor = rand(0,2);
                switch ($this -> vencedor) {
                    case 0: // Empate
                        echo "<p>A luta empatou</p>\n";
                        $this -> desafiado -> empatarLuta();
                        $this -> desafiante -> empatarLuta();
                        break;
                    case 1: // Desafiado vence
                        echo "<p>" . $this -> desafiado -> getNome() . " venceu</p>\n";
                        $this -> desafiado -> ganharLuta();
                        $this -> desafiante -> perderLuta();
                        break;
                    case 2: // Desafiante vence
                        echo "<p>" . $this -> desafiante -> getNome() . " venceu</p>\n";
                        $this -> desafiado -> perderLuta();
                        $this -> desafiante -> ganharLuta();
                        break;
                }
           } else {
                echo "<p>A luta não pode acontecer</p>\n";
           }
        }

        public function getDesafiado() {
                return $this->desafiado;
        }
        public function setDesafiado($desafiado) {
                $this->desafiado = $desafiado;

                return $this;
        }
        public function getDesafiante() {
                return $this->desafiante;
        }
        public function setDesafiante($desafiante) {
                $this->desafiante = $desafiante;

                return $this;
        } 
        public function getAprovado() {
                return $this->aprovado;
        }
        public function setAprovado($aprovado) {
                $this->aprovado = $aprovado;

                return $this;
        }
        public function getRounds() {
                return $this->rounds;
        }
        public function setRounds($rounds) {
                $this->rounds = $rounds;

                return $this;
        }
        public function getVencedor() {
                return $this->vencedor;
        }
        public function setVencedor($vencedor) {
                $this->vencedor = $vencedor;

                return $this;
        }
    }

?>