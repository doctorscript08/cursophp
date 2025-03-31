<?php
    require_once("Lutador.php");

    class Luta {
        private $desafiado, $desafiante, $rounds, $aprovada;

        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && ($l1 !== $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar() {
            if ($this->aprovada) {
                echo $this->desafiado->apresentar();
                echo $this->desafiante->apresentar();
                $vencedor = mt_rand(0, 2);

                switch($vencedor) {
                    case 0:
                        return $this->desafiado->empatarLuta(). "<br>". $this->desafiante->empatarLuta(). "<br>Empatou!";
                        break;
                    case 1:
                        return $this->desafiado->ganharLuta(). "<br>". $this->desafiante->perderLuta(). "<br>{$this->desafiado->getNome()} ganhou!";
                        break;
                    case 2:
                        return $this->desafiante->ganharLuta(). "<br>". $this->desafiado->perderLuta(). "<br>{$this->desafiante->getNome()} ganhou!";
                        break;
                    default:
                        return "ERRO";
                        break;
                }
            } else {
                return "A luta não pode acontecer!";
            }
        }
    }
?>