<?php
    class usuario{
        //public $nome;
        //public $idade;
        //public $email;
        private $nome;
        private $idade;
        private $email;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->email = $email;
            }else{
                echo "<p>Email Inválido {$this->getNome()}</p>";
            }
        }

        public function __construct($nome=null, $idade = null, $email = null){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
        }
    }
?>