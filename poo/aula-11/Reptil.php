<?php
    require_once 'Animal.php';

    class Reptil {
        private $corEscama;

        public function locomover() {
            return "<p>Rastejando</p>";
        }

        public function alimentar() {
            return "<p>Comendo vegetais</p>";
        }

        public function emitirSom() {
            return "<p>Som de réptil</p>";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($cor) {
            $this->corEscama = $cor;
        }
    }
?>