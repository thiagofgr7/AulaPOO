<?php
    class Jogador {
        private string $apelido;
        private int $nivel;
        private int $xp;
        private int $moedas;

        public function __construct(string $apelido, int $nivel, int $xp, int $moedas) {
            $this->apelido = $apelido;
            $this->nivel = $nivel;
            $this->xp = $xp;
            $this->moedas = $moedas;
        }

        public function ganharXp(int $qtd): void {
            $this->xp += $qtd;
            echo "<br> O jogador {$this->apelido} ganhou {$qtd} de XP.\n";
        }

        public function gastarMoedas(int $qtd): void {
            $this->moedas -= $qtd;
            echo "<br> O jogador {$this->apelido} gastou {$qtd} moedas.\n";
        }

        // Getters
        public function getApelido(): string { return $this->apelido; }
        public function getNivel(): int { return $this->nivel; }
        public function getXp(): int { return $this->xp; }
        public function getMoedas(): int { return $this->moedas; }
    }
?>