<?php
    require_once 'Animal2.php';

    class Mamifero extends Animal2 {
        private $corPelo;

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