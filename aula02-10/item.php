<?php
    class Item {
        private string $nome;
        private string $raridade;
        private int $valor;

        public function __construct(string $nome, string $raridade, int $valor) {
            $this->nome = $nome;
            $this->raridade = $raridade;
            $this->valor = $valor;
        }

        public function usar(): void {
            echo "<br> O item {$this->nome} foi utilizado.\n";
        }

        // Getters
        public function getNome(): string { return $this->nome; }
        public function getRaridade(): string { return $this->raridade; }
        public function getValor(): int { return $this->valor; }
    }
?>