<?php 
    require_once 'Aluno.php';
    class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa renovada com sucesso!</p>\n";
        }

        public function pagarMensalidade() {
            echo "<p>" . $this->getNome() . " é bolsista! Pagamento facilitado.</p>\n";
        }

        function getBolsa() {
            return $this->bolsa;
        }
        function setBolsa($bolsa) {
            $this->bolsa = $bolsa;

            return $this;
        }
    }

?>