<?php 
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }

        public function apresentar() {
            echo "<p>===================================================</p>\n";
            echo "<p>CHEGOU A HORA! O lutador " . $this->getNome() . "</p>\n";
            echo "<p>Diretamente de " . $this->getNacionalidade() . "</p>\n";
            echo "<p>Com " . $this->getIdade() . " anos e " . $this->getAltura() . "m de altura</p>\n";
            echo "<p>Pesa " . $this->getPeso() . "kg</p>\n";
            echo "<p>Ganhou " . $this->getVitorias() . " vezes</p>\n";
            echo "<p>Perdeu " . $this->getDerrotas() . " vezes</p>\n";
            echo "<p>Empatou " . $this->getEmpates() . " vezes</p>\n";
        }
        public function status() {
            echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . "</p>\n";
            echo "<p>" . $this->getVitorias() . " vitórias</p>\n";
            echo "<p>" . $this->getDerrotas() . " derrotas</p>\n";
            echo "<p>" . $this->getEmpates() . " empates</p>\n";
        }
        function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }
        

        function getEmpates() {
            return $this->empates;
        }
        function setEmpates($empates) {
            $this->empates = $empates;

            return $this;
        }
        function getDerrotas(){
            return $this->derrotas;
        }
        function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;

            return $this;
        }
        function getVitorias(){
            return $this->vitorias;
        }
        function setVitorias($vitorias) {
            $this->vitorias = $vitorias;

            return $this;
        }
        function getCategoria() {
            return $this->categoria;
        }
        function setCategoria($categoria) {
            $this->categoria = $categoria;

            return $this;
        }
        function getPeso() {
            return $this->peso;
        }
        function setPeso($peso) {
            $this->peso = $peso;
            if ($peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }
        function getAltura() {
            return $this->altura;
        }
        function setAltura($altura) {
            $this->altura = $altura;

            return $this;
        }
        function getIdade() {
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;

            return $this;
        }
        function getNacionalidade() {
            return $this->nacionalidade;
        }
        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;

            return $this;
        }
        function getNome() {
            return $this->nome;
        }

        function setNome($nome) {
            $this->nome = $nome;

            return $this;
        }
    }
?>