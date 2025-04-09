<?php 
    class Pessoa {
        private $nome, $idade, $sexo;

        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public function fazerAniv() {
            $this->idade++;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function getIdade() {
            return $this->idade;
        }
    }
?>