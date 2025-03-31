<?php 
    class Lutador {

        private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }

        public function apresentar() {
            return "
                <p>-----------------------------------------------------------------------------------------------------------------------------------------------------</p>
                <p>CHEGOU A HORA! O lutador ". $this->nome. ", veio directamente de ". $this->nacionalidade. ", tem ". $this->idade. " anos de idade e pesa ". $this->peso. "Kg.<br>Ele tem ". $this->vitorias. " vitórias, ". $this->derrotas. " derrotas e ". $this->empates. " empates.</p>
            ";
        }

        public function status() {
            return $this->empates == 1 ? "<br>-----------------------------------------------------------------------------------------<br>{$this->nome} é um peso {$this->categoria}, com {$this->vitorias} vitórias, {$this->derrotas} derrotas e {$this->empates} empate." : "<br>{$this->nome} é um peso {$this->categoria}, com {$this->vitorias} vitórias, {$this->derrotas} derrotas e {$this->empates} empates.";
        }

        private function verificarCategoria() {
            return $this->categoria == "Inválido" ? true: false;
        }

        public function ganharLuta() {
            return $this->verificarCategoria() ? "Não pode lutar" : "Mais uma vitória, agora: ". $this->vitorias += 1;
        }

        public function perderLuta() {
            return $this->verificarCategoria() ? "Não pode lutar" : "Mais uma derrota, agora: ". $this->derrotas += 1;
        }

        public function empatarLuta() {
            return $this->verificarCategoria() ? "Não pode lutar" : "Mais um empate, agora: ". $this->empates += 1;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria($this->peso);
        }

        public function getCategoria() {
            return $this->categoria;
        }

        private function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        public function getEmpates() {
            return $this->empates;
        }

        public function setEmpates($empates) {
            $this->empates = $empates;
        }
    }
?>