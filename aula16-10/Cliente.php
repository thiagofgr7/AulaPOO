<?php
class Cliente {
    private $tipoPessoa;
    private $documento;
    private $nome;
    private $tabelaPreco;
    private $limiteCredito;
    private $telefone;
    private $whatsapp;
    private $email;
    private $ativo;

    public function __construct($tipoPessoa, $documento, $nome, $tabelaPreco, $limiteCredito, $telefone, $whatsapp, $email, $ativo) {
        $this->tipoPessoa = $tipoPessoa;
        $this->documento = $documento;
        $this->nome = $nome;
        $this->tabelaPreco = $tabelaPreco;
        $this->limiteCredito = $limiteCredito;
        $this->telefone = $telefone;
        $this->whatsapp = $whatsapp;
        $this->email = $email;
        $this->ativo = $ativo;
    }

    public function getTipoPessoa() { return $this->tipoPessoa; }
    public function getDocumento() { return $this->documento; }
    public function getNome() { return $this->nome; }
    public function getTabelaPreco() { return $this->tabelaPreco; }
    public function getLimiteCredito() { return $this->limiteCredito; }
    public function getTelefone() { return $this->telefone; }
    public function getWhatsapp() { return $this->whatsapp; }
    public function getEmail() { return $this->email; }
    public function getAtivo() { return $this->ativo; }
}