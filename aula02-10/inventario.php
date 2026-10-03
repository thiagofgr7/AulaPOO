<?php
    require_once "item.php";

    class Inventario {
        private int $capacidade;

        public function __construct(int $capacidade) {
            $this->capacidade = $capacidade;
        }

        public function adicionarItem(Item $item): bool {
            echo "<br> Item {$item->getNome()} adicionado ao inventário.\n";
            return true;
        }

        public function removerItem(Item $item): void {
            echo "<br> Item {$item->getNome()} removido do inventário.\n";
        }

        // Getter
        public function getCapacidade(): int { return $this->capacidade; }
    }
?>