<?php
    require_once 'Gafanhoto.php';
    require_once 'Video.php';

    class Visualizacao {
        private $espectador, $filme;

        function __construct($espectador, $filme) {
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }

        public function avaliar() {
            $this->filme->setAvaliacao(5);
        }

        public function avaliar_nota($nota) {
            $this->filme->setAvaliacao($nota);
        }

        public function avaliar_percentagem($percentagem) {
            $nova = 0;
            if ($percentagem <= 20) {
                $nova = 3;
            } elseif ($percentagem <= 50) {
                $nova = 5;
            } elseif ($percentagem <= 90) {
                $nova = 8;
            } else {
                $nova = 10;
            }
            
            $this->filme->setAvaliacao($nova);
        }
    }
?>