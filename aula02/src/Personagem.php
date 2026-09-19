<?php
    namespace aula02;
    class Personagem {
        private string $nome;
        private int $hp;
        private int $hpMaximo;

        public function __construct(string $nome, int $hpMaximo){
            $this ->nome = $nome;
            $this ->hpMaximo = $hpMaximo;
            $this ->hp = $hpMaximo;
        }

        public function getNome(): string{
            return $this ->nome;
        }

        public function getHp(): int{
            return $this ->hp;
        }

        public function curar(int $pontos): void{
            $this ->hp += $pontos;
            if ($this->hp > $this->hpMaximo){
                $this->hp = $this->hpMaximo;
            }
            echo "{$this->nome} foi curado em {$pontos} pontos de vida. HP atual: {$this->hp}/{$this->hpMaximo}\n";
        }
        
        public function receberDano(int $pontos): void{
            if($pontos>0){
                $this->hp -= $pontos;
                if($this->hp < 0){
                    $this->hp = 0;
                }
            }
            echo "{$this->nome} recebeu {$pontos} pontos de dano. Hp atual: {$this->hp}/{$this->hpMaximo}\n";
            if($this->hp==0){
                echo "{$this->nome} morreu!\n";
            }
        }
    }
?>