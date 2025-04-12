<?php
    require_once 'AcoesVideo.php';

    class Video implements AcoesVideo {
        private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

        public function __construct($titulo) {
            $this->titulo = $titulo;
            $this->avaliacao = 0;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function play() {
            if (!$this->reproduzindo) {
                $this->reproduzindo = true;
                return "<p>Reproduzindo...!</p>";
            }

            return "<p>Já está a reproduzir!</p>";
        }

        public function pause() {
            if ($this->reproduzindo) {
                $this->reproduzindo = false;
                return "<p>Pausado...!</p>";
            }

            return "<p>Já está no pause!</p>";
        }

        public function like() {
            $this->curtidas++;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($t) {
            $this->titulo = $t;
        }

        public function getAvaliacao() {
            return $this->avaliacao;
        }

        public function setAvaliacao($a) {
            $media = ($this->avaliacao + $a)/$this->views;
            $this->avaliacao = $media;
        }

        public function getViews() {
            return $this->views;
        }

        public function setViews($v) {
            $this->views = $v;
        }

        public function getCurtidas() {
            return $this->curtidas;
        }

        public function setCurtidas($c) {
            $this->curtidas = $c;
        }

        public function getReproduzindo() {
            return $this->reproduzindo;
        }

        public function setReproduzindo($r) {
            $this->reproduzindo = $r;
        }
    }
?>