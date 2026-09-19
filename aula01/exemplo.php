<?php
class ConstrutorDeConsultas {
    private $tabela = "usuarios";

    // Intercepta métodos inexistentes
    public function __call($nomeDoMetodo, $argumentos) {
        // Verifica se a chamada começa com "buscarPor"
        if (str_starts_with($nomeDoMetodo, 'buscarPor')) {
            // Extrai o nome do campo (ex: buscarPorNome -> Nome)
            $campo = strtolower(substr($nomeDoMetodo, 9));
            $valor = $argumentos[0] ?? null;

            return "SELECT * FROM {$this->tabela} WHERE {$campo} = '{$valor}'";
        }

        throw new Exception("O método {$nomeDoMetodo} não existe.");
    }
}

$consulta = new ConstrutorDeConsultas();

// O método buscarPorEmail não existe, então o __call assume o controle
echo $consulta->buscarPorEmail("joao@exemplo.com");
// Saída: SELECT * FROM usuarios WHERE email = 'joao@exemplo.com'

echo "\n";

echo $consulta->buscarPorStatus("ativo");
// Saída: SELECT * FROM usuarios WHERE status = 'ativo'
?>