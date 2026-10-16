<?php
class Database {
    private $conexao;

    public function __construct() {
        try {
            // Exemplo usando SQLite em memória para simplicidade de testes
            $this->conexao = new PDO('sqlite::memory:');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Criação da tabela de clientes para demonstração
            $this->conexao->exec("CREATE TABLE IF NOT EXISTS clientes (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                tipo_pessoa TEXT,
                documento TEXT,
                nome TEXT,
                tabela_preco TEXT,
                limite_credito REAL,
                telefone TEXT,
                whatsapp TEXT,
                email TEXT,
                ativo INTEGER
            )");
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}