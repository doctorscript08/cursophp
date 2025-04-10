<?php
    require_once 'Aluno.php';

    class Bolsista extends Aluno {
        private $bolsa;

        public function __construct($nomde, $idade, $sexo, $matricula, $curso, $bolsa) {
            parent::__construct($nomde, $idade, $sexo, $matricula, $curso);
            $this->bolsa = $bolsa;
        }

        public function renovar_bolsa() {
            return "<p>Bolsa renovada!</p>";
        }

        public function pagar_mensalidade() {
            return "<p>{$this->getNome()} é bolsista, então paga com desconto!</p>". parent::pagar_mensalidade();
        }
    }
?>