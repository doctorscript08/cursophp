<?php 
    class Caneta {
        var $modelo, $cor, $ponta ,$carga, $tampada;

        function rabiscar() {
            if (!($this->tampada)) {
                return "<p>Estou rabiscando...</p>";
            }
            return "<p>A caneta está tampada</p>";
        }

        function tampar() {
            $this->tampada = true;
        }

        function destampar() {
            $this->tampada = false;          
        }
    }
?>