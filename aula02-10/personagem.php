<?php
    class Personagem {
        private string $nome;
        private string $classe;
        private string $nivel;

        public function __construct(string $nome, string $classe, string $nivel) {
            $this->nome = $nome;
            $this->classe = $classe;
            $this->nivel = $nivel;
        }

        public function atacar(): void {
            echo "<br> O personagem {$this->nome} ({$this->classe}) atacou!\n";
        }

        // Getters
        public function getNome(): string { return $this->nome; }
        public function getClasse(): string { return $this->classe; }
        public function getNivel(): string { return $this->nivel; }
    }
?>