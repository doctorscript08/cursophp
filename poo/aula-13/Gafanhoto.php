<?php
    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa {
        private $login, $totAssistido;

        public function __construct($nome, $idade, $sexo, $login) {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        public function viuMaisUm() {
            $this->totAssistido++;
        }

        public function getLogin() {
            return $this->login;
        }

        public function setLogin($l) {
            $this->login = $l;
        }

        public function getTotAssistido() {
            return $this->totAssistido;
        }

        public function setTotAssistido($ta) {
            $this->totAssistido = $ta;
        }
    }
?>