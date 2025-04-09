<?php 
    require_once('Pessoa.php');

    class Professor extends Pessoa {
        private $especialidade, $salario;

        public function __construct($especialidade, $salario, $nome, $idade, $sexo) {
            parent::__construct($nome, $idade, $sexo);
            $this->especialidade = $especialidade;
            $this->salario = $salario;
        }

        public function receber_aumento($aumento) {
            $this->salario += $aumento;
        }

        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function getSalario() {
            return $this->salario;
        }
    }
?>