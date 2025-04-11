<?php
    require_once 'Mamifero.php';

    class Cachorro extends Mamifero {
        public function emitirSom() {
            return "<p>Au!Au!Au!</p>";
        }
    }
?>