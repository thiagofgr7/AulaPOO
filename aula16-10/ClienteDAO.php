<?php
class ClienteDAO {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getConexao();
    }

    public function inserir(Cliente $cliente) {
        $sql = "INSERT INTO clientes (tipo_pessoa, documento, nome, tabela_preco, limite_credito, telefone, whatsapp, email, ativo) 
                VALUES (:tipo, :doc, :nome, :tabela, :limite, :tel, :whats, :email, :ativo)";
        
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':tipo' => $cliente->getTipoPessoa(),
            ':doc' => $cliente->getDocumento(),
            ':nome' => $cliente->getNome(),
            ':tabela' => $cliente->getTabelaPreco(),
            ':limite' => $cliente->getLimiteCredito(),
            ':tel' => $cliente->getTelefone(),
            ':whats' => $cliente->getWhatsapp(),
            ':email' => $cliente->getEmail(),
            ':ativo' => $cliente->getAtivo()
        ]);
    }

    public function listarTodos() {
        $stmt = $this->db->query("SELECT * FROM clientes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}