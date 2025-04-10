<?php 
    abstract class Pessoa {
        private $nome, $idade, $sexo;

        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public final function fazer_aniversario() {
            $this->idade++;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getSexo() {
            return $this->sexo;
        }
    }
?>