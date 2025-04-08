<?php
    require_once('Pessoa.php');

    require_once('Publicacao.php');

    class Livro implements Publicacao {
        private $titulo, $autor, $totPaginas, $pagActual, $aberto, $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor, $aberto, $pagActual) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
            $this->aberto = $aberto;
            $this->pagActual = $pagActual;
        }

        public function detalhes() {
            return "
            <hr>
            TÍTULO: {$this->titulo}
            AUTOR: {$this->autor}
            TOTAL DE PÁGINAS: {$this->totPaginas}
            PÁGINA ACTUAL: {$this->pagActual}
            ESTÁ ABERTO? {$this->aberto}
            LEITOR: {$this->leitor->getNome()}
            ";
        }

        public function abrir() {
            if (!$this->aberto) {
                $this->aberto = true;
                $this->pagActual = 1;
            }
        }

        public function fechar() {
            if ($this->aberto) {
                $this->aberto = false;
                $this->pagActual = 0;
            }
        }

        public function folhear($p) {
            if ($this->aberto) {
                $this->pagActual = ($p >= 1) && ($p <= $this->totPaginas) ? $p : $this->pagActual;

                return $this->pagActual;
            }

            return "<p>O livro está fechado!</p>";
        }

        public function avancarPag() {
            if ($this->aberto) {
                $this->pagActual += ($this->pagActual + 1) <= $this->totPaginas ? 1 : 0;
            }

            return "<p>O livro está fechado!</p>";
        }
        
        public function voltarPag() {
            if ($this->aberto) {
                $this->pagActual -= ($this->pagActual - 1) >= 1 ? 1 : 0;
            }

            return "<p>O livro está fechado!</p>";
        }
    }
?>