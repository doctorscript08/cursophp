<?php 
    require_once('Pessoa.php');

    class Funcionario extends Pessoa {
        private $sector, $trabalhando;

        public function __construct($sector, $trabalhando, $nome, $idade, $sexo) {
            parent::__construct($nome, $idade, $sexo);
            $this->sector = $sector;
            $this->trabalhando = $trabalhando;
        }

        public function mudarTrabalho() {
            $this->trabalhando = $this->trabalhando ? false : true;
        }

        public function getSector() {
            return $this->sector;
        }

        public function getTrabalhando() {
            return $this->trabalhando;
        }
    }
?>