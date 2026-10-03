<?php
    class administrador{
        private string $cargo;

        public function __construct(string $cargo){
            $this->cargo=$cargo;
        }

        public function banirJogador(string $jogador): void{
            echo "<br> O adm baniu o $jogador\n";
        }

        public function getCargo(): string{
            return $this->cargo;
        }
    }
?>