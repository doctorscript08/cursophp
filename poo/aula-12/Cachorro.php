<?php
    require_once 'Lobo.php';

    class Cachorro extends Lobo {
        public function emitirSom() {
            return "<p>Au!Au!Au!</p>";
        }

        public function reagir_frase($frase) {
            if ($frase === "Toma comida" || $frase === "Olá") {
                return "<p>Abanar o rabo</p>";
            } else {
                return "<p>Rosnar</p>";
            }
        }

        public function reagir_hora($hora) {
            if ($hora < 12) {
                return "<p>Abanar</p>";
            } elseif ($hora >= 18) {
                return "<p>Ignorar</p>";
            } else {
                return "<p>Abanar e latir</p>";
            }
        }

        public function reagir_dono($dono) {
            if ($dono) {
                return "<p>Abanar</p>";
            } else {
                return "<p>Rosnar e latir</p>";
            }
        }

        public function reagir_idade($idade, $peso) {
            if ($idade < 5) {
                if ($peso < 10) {
                    return "<p>Abanar</p>";
                } else {
                    return "<p>Latir</p>";
                }
            } else {
                if ($peso < 10) {
                    return "<p>Rosnar</p>";
                } else {
                    return "<p>Ignorar</p>";
                }
            }
        }
    }
?>