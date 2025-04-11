<?php
    require_once 'Animal.php';

    class Ave {
        private $corPena;

        public function locomover() {
            return "<p>Voando</p>";
        }

        public function alimentar() {
            return "<p>Comendo frutas</p>";
        }

        public function emitirSom() {
            return "<p>Som de ave</p>";
        }

        public function getCorPena() {
            return $this->corPena;
        }

        public function setCorPena($cor) {
            $this->corPena = $cor;
        }
    }
?>