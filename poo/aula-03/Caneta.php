<?php 
    class Caneta {
        public $modelo, $cor;
        private $ponta;
        protected $carga, $tampada;

        public function rabiscar() {
            if (!($this->tampada)) {
                return "<p>Estou rabiscando...</p>";
            }
            return "<p>A caneta está tampada</p>";
        }

        public function tampar() {
            $this->tampada = true;
        }

        public function destampar() {
            $this->tampada = false;          
        }
    }
?>