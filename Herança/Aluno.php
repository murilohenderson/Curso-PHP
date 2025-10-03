<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        protected $matricula;
        protected $curso;
        
        public function pagarMensalidade() {
            echo "<p>Pagando mensalidade do aluno " . $this->getNome() . "</p>";
        }
        public function getCurso() {
                return $this->curso;
        }
        public function setCurso($curso) {
                $this->curso = $curso;

                return $this;
        }
        public function getMatricula() {
                return $this->matricula;
        }
        public function setMatricula($matricula) {
                $this->matricula = $matricula;

                return $this;
        }
    }

?>