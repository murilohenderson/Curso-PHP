<?php 
    class Caneta {
        public $modelo;
        public $cor;
        public $ponta;
        public $carga;
        public $tampada;
        function rabiscar() {
            if ($this -> tampada == true) {
                echo "<p>Não é possível rabiscar, a caneta está tampada</p>";
            } else {
                echo "<p>Estou rabiscando</p>";
            }
            $this -> carga -= 1;
            if ($this -> carga = 0) {
                echo "<p>Caneta sem carga, não é possível rabisccar</p>";
            } else {
                echo "<p>Estou rabiscando</p>";
            }
        }
        function tampar() {
            $this -> tampada = true;
        }
        function destampar() {
            $this -> tampada = false;
        }
    }

?>