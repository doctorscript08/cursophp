<?php 
    class Caneta {
        private $modelo, $ponta, $tampada, $cor;

        public function __construct($m, $c, $p) {
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function tampar() {
            $this->tampada = true;
        }

        public function destampar() {
            $this->tampada = false;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setCor($c) {
            $this->cor = $c;
        }

        public function getTampada() {
            return $this->tampada;
        }

        public function setTamapada($t) {
            $this->tampada = $t;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($m) {
            $this->modelo = $m;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }
    }
?>