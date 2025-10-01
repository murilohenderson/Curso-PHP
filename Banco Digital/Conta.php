<?php 
    class Conta {
        public $numConta;
        protected $tipoConta;
        private $dono;
        private $saldo;
        private $statusAberta;

        // Métodos
        public function abrirConta($tipoConta, $dono) {
            $this -> setTipoConta($tipoConta);
            $this -> setDono($dono);
            $this -> setNumConta(rand(1000, 9999));
            $this -> setStatusAberta(true);
            if ($tipoConta == "CC") {
                $this -> setSaldo(50);
            } elseif ($tipoConta == "CP") {
                $this -> setSaldo(150);
            }
        }
        public function fecharConta() {
            if ($this -> getSaldo() > 0) {
                echo "<p>Saldo positivo, não é possível fechar a conta.</p>";
            } elseif ($this -> getSaldo() < 0) {
                echo "<p>Saldo negativo, não é possível fechar a conta.</p>";
            } else {
                $this -> setStatusAberta(false);
                echo "<p>Conta fechada com sucesso!</p>";
            }
        }
        public function depositar($valor) {
            if ($this -> getStatusAberta() == true) {
                if ($valor < 0) {
                    echo "<p>Valor inválido para depósito!</p>";
                } else {
                    $this -> setSaldo($this -> getSaldo() + $valor);
                }
            } else {
                echo "<p>Impossível depositar, a conta está fechada!</p>";
            }
        }
        public function sacar($valor) {
            if ($this -> getStatusAberta() == true) {
                if ($this -> getSaldo() > 0 && $this -> getSaldo() >= $valor) {
                    $this -> setSaldo($this -> getSaldo() - $valor);
                } elseif ($this -> getSaldo() > 0 && $this -> getSaldo() < $valor) {
                    echo "<p>Saldo insuficiente para saque!</p>";
                } else {
                    echo "<p>Saldo insuficiente para saque!</p>";
                }
            } else {
                echo "<p>Impossível sacar, a conta está fechada!</p>";
            }
        }
        public function pagarMensalidade() {
            if ($this -> getStatusAberta() == true) {
                if ($this -> getTipoConta() == "CC") {
                    $this -> setSaldo($this -> getSaldo() - 12);
                } elseif ($this -> getTipoConta() == "CP") {
                    $this -> setSaldo($this -> getSaldo() - 20);
                } else {
                    echo "<p>Tipo de conta inválido!</p>";
            } 
            } else {
                echo "<p>Impossível pagar, a conta está fechada!</p>";
            }
            
        }


        // Métodos Especiais
        public function __construct() {
            $this -> saldo = 0;
            $this -> statusAberta = false;
            echo "<p>Conta criada com sucesso!</p>";
        }
        public function getNumConta() {
            return $this -> numConta;
        }
        public function setNumConta($numConta) {
            $this -> numConta = $numConta;
        }
        public function getTipoConta() {
            return $this -> tipoConta;
        }
        public function setTipoConta($tipoConta) {
            $this -> tipoConta = $tipoConta;
        }
        public function getDono() {
            return $this -> dono;
        }
        public function setDono($dono) {
            $this -> dono = $dono;
        }
        public function getSaldo() {
            return $this -> saldo;
        }
        public function setSaldo($saldo) {
            $this -> saldo = $saldo;
        }
        public function getStatusAberta() {
            return $this -> statusAberta;
        }
        public function setStatusAberta($statusAberta) {
            $this -> statusAberta = $statusAberta;
        }
    }



?>