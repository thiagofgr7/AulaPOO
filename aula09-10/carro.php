<?php
    require_once 'veiculo.php';
    class carro extends veiculo{
        private $portas;
        public function __construct($modelo, $marca, $portas){
            //chamado da classe pai
            parent::__construct($modelo, $marca);
            $this->portas = $portas;
        }

        public function abrirPorta(){
            echo "<br> O carro $this->modelo da marca $this->marca está abrindo as $this->portas portas\n </p>";
        }
    }
?>