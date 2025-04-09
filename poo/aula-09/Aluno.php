<?php 
    require_once('Pessoa.php');

    class Aluno extends Pessoa {
        private $matr, $curso;

        public function __construct($matr, $curso, $nome, $idade, $sexo) {
            parent::__construct($nome, $idade, $sexo);
            $this->matr = $matr;
            $this->curso = $curso;
        }

        public function cancelarMatr() {
            return "<p>Matrícula cancelada!</p>";
        }

        public function getMatr() {
            return $this->matr;
        }

        public function getCurso() {
            return $this->curso;
        }
    }
?>