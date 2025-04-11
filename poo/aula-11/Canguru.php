<?php
    require_once 'Mamifero.php';

    class Canguru extends Mamifero {
        public function locomover() {
            return "<p>Pulando</p>";
        }
    }
?>