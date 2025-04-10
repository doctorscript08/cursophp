<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        private $matricula, $curso;

        public function __construct($nome, $idade, $sexo, $matricula, $curso) {
            parent::__construct($nome, $idade, $sexo);
            $this->matricula = $matricula;
            $this->curso = $curso;
        }

        public function pagar_mensalidade() {
            if ($this->getSexo() === 'M') {
                return "<p>Mensalidade paga pelo aluno {$this->getNome()}!</p>";
            }

            return "<p>Mensalidade paga pela aluna {$this->getNome()}!</p>";
        }
    }
?>