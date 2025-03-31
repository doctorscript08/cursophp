<?php
    require_once("Controlador.php");

    Class ControleRemoto implements Controlador {
        private $volume, $ligado, $tocando, $isMenuOpen = false;

        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        public function ligar() {
            if ($this->ligado) {
                return "<p>O dispositivo já está ligado!</p>";
            }

            $this->ligado = true;
            return "<p>Ligado com sucesso!</p>";
        }

        public function desligar() {
            if (!($this->ligado)) {
                return "<p>O dispositivo já está desligado!</p>";
            }

            $this->ligado = false;
            return "<p>Desligado com sucesso!</p>";
        }

        public function abrirMenu() {
            if ($this->ligado) {
                if (!$this->isMenuOpen) {
                    $volumeCount = "";
    
                    for ($c = 0; $c <= $this->volume; $c += 10) {
                        $volumeCount .= "|";
                    }
    
                    $isLigado = $this->ligado ? "SIM" : "NÃO";
    
                    return "
                        Está ligado? {$isLigado} <br>
                        Volume: {$this->volume} &nbsp&nbsp;
                        {$volumeCount}
                    ";
                } else {
                    return "<p>O menu já está aberto</p>";
                }
            }

            return "<p>O dispositivo está desligado!</p>";
        }

        public function fecharMenu() {
            if ($this->ligado && $this->isMenuOpen) {
                return "<p>Fechando o menu...</p>";
            }

            return "<p>O dispositivo está desligado!</p>";
        }

        public function maisVolume() {
            if (($this->ligado)) {
                if (($this->volume < 100) && ($this->volume + 5 <= 100)) {
                    $this->volume += 5;
                } else {
                    return "Impossível aumentar o volume";
                }
            } else {
                return "<p>O dispositivo está desligado!</p>";
            }
        }

        public function menosVolume() {
            if (($this->ligado)) {
                if (($this->volume > 0) && ($this->volume - 5 >= 0)) {
                    $this->volume -= 5;
                } else {
                    return "Impossível diminuir o volume";
                }
            } else {
                return "<p>O dispositivo está desligado!</p>";
            }
        }

        public function ligarMudo() {
            if ($this->ligado && $this->volume > 0) {
                $this->volume = 0;
                return "<p>Mudo ligado</p>";
            }

            return "<p>Já está no mudo!</p>";
        }

        public function desligarMudo() {
            if ($this->ligado && $this->volume == 0) {
                $this->volume += 50;
                return "<p>Mudo desligado</p>";
            }

            return "<p>Não está no mudo!</p>";
        }

        public function play() {
            if (!$this->ligado) {
                return "<p>O dispositivo está desligado!</p>";
            }

            if ($this->tocando) {
                return "<p>O dispositivo já está a tocar!</p>";
            }

            $this->tocando = true;
            return "<p>Tocando...</p>";
        }

        public function pause() {
            if (!$this->ligado) {
                return "<p>O dispositivo está desligado!</p>";
            }

            if (!$this->tocando) {
                return "<p>O dispositivo já está no pause!</p>";
            }

            $this->tocando = false;
            return "<p>Pause...</p>";
        }

        private function getVolume() {
            return $this->volume;
        }

        private function setVolume($v) {
            $this->volume = $v;
        }

        private function getLigado() {
            return $this->ligado;
        }

        private function setLigado($l) {
            $this->ligado = $l;
        }

        private function getTocando() {
            return $this->tocando;
        }

        private function setTocando($t) {
            $this->tocando = $t;
        }

        private function getIsMenuOpen() {
            return $this->isMenuOpen;
        }

        private function setIsMenuOpen($open) {
            $this->isMenuOpen = $open;
        }
    }
?>