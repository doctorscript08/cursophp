<?php
    require_once 'Animal.php';

    class Mamifero extends Animal {
        private $corPelo;

        public function locomover() {
            return "<p>Correndo</p>";
        }

        public function alimentar() {
            return "<p>Mamando</p>";
        }

        public function emitirSom() {
            return "<p>Som de mamífero</p>";
        }

        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($cor) {
            $this->corPelo = $cor;
        }
    }
?>