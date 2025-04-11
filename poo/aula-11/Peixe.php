<?php
    require_once 'Animal.php';

    class Peixe {
        private $corEscama;

        public function locomover() {
            return "<p>Nadando</p>";
        }

        public function alimentar() {
            return "<p>Comendo substâncias</p>";
        }

        public function emitirSom() {
            return "<p>Peixe não faz som</p>";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($cor) {
            $this->corEscama = $cor;
        }
    }
?>