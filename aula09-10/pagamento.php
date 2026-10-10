<?php
    abstract class pagamento{
        protected $valor;
        public function __construct($valor){
            $this->valor = $valor;
        }
        abstract public function processar();
        //Método Abstrato obriga as classes filhas a implementar o método processar()
    }
?>