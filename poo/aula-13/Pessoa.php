<?php
    abstract class Pessoa {
        protected $nome, $idade, $sexo, $experiencia;

        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }

        protected function ganharExp($n) {
            $this->experiencia += $n;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($s) {
            $this->sexo = $s;
        }
    }
?>