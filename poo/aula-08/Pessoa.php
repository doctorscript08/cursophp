<?php 
    class Pessoa {
        private $nome, $idade, $sexo;

        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public function fazerAniver() {
            $this->idade ++;
        }

        public function getNome() {
            return $this->nome;
        }
    }
?>