<?php 
    class Conta {
        public $numConta;
        protected $tipo;
        private $dono, $saldo = 0, $status;

        public function __construct() {
            $this->saldo = 0;  
            $this->status = false;
        }

        public function abrirConta($d, $nc, $t) {
            if (!($this->status)) {
                $this->status = true;
                
                $this->dono = $d;
                $this->numConta = $nc;
                $this->tipo = $t;
                $this->saldo += $this->tipo === 'cc' ? 50 : 150;
                return $this->dono. "<p>Conta aberta com sucesso!</p>";
            } else {
                return "<p>Já possui uma conta aberta</p>";
            }
        }

        public function fecharConta() {
            if ($this->status) {
                if ($this->saldo === 0) {
                    $this->status = false;
                    return $this->dono. "<p>Conta fechada com sucesso!</p>";
                } else if ($this->saldo > 0) {
                    return "<p>Não pode fechar a conta! Primeiro saque todo o dinheiro.</p>";
                } else {
                    return "<p>Não pode fechar a conta! Possui crédito, pague primeiro.</p>";
                }
            } else {
                return "<p>Não possui uma conta aberta</p>";
            }
        }

        public function depositar($deposito) {
            if ($this->status) {
                $this->saldo += $deposito;
                return $this->dono. "<p>Depósito efectuado com sucesso!<br>Saldo actual: {$this->saldo}AOA</p>";
            } else {
                return "<p>Não possui uma conta aberta</p>";
            }
        }

        public function sacar($saque) {
            if ($this->status) {
                if (($this->saldo < $saque)) {
                    return "<p>Saldo insuficiente!</p>";
                } else {
                    $this->saldo -= $saque;
                    return $this->dono. "<p>Saque efectuado com sucesso!<br>Saldo actual: {$this->saldo}AOA</p>";
                }
            } else {
                return "<p>Não possui uma conta aberta</p>";
            }
        }

        public function pagarMensalidade() {
            if ($this->status) {
                $this->saldo -= $this->tipo === 'cc' ? 12 : 20;

                return $this->saldo < 0 ? $this->dono. "<p>Saldo actual: {$this->saldo}AOA<br>Possui crédito!</p>" : $this->dono. "<p>Saldo actual: {$this->saldo}AOA</p>";
            } else {
                return "<p>Não possui uma conta aberta</p>";
            }
        }

        public function getDono() {
            return $this->dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getNumConta() {
            return $this->numConta;
        }
    }
?>