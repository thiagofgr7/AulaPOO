<?php
class ClienteController {
    private $clienteDAO;

    public function __construct(ClienteDAO $clienteDAO) {
        $this->clienteDAO = $clienteDAO;
    }

    public function salvar(array $dados) {
        // Validação simples
        if (empty($dados['nome']) || empty($dados['documento'])) {
            return false;
        }

        $cliente = new Cliente(
            $dados['tipo_pessoa'] ?? 'Física',
            $dados['documento'],
            $dados['nome'],
            $dados['tabela_preco'] ?? 'Varejo (Consumidor)',
            $dados['limite_credito'] ?? 0.0,
            $dados['telefone'] ?? '',
            $dados['whatsapp'] ?? '',
            $dados['email'] ?? '',
            isset($dados['ativo']) ? 1 : 0
        );

        return $this->clienteDAO->inserir($cliente);
    }

    public function listar() {
        return $this->clienteDAO->listarTodos();
    }
}