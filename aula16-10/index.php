<?php
require_once 'Database.php';
require_once 'Cliente.php';
require_once 'ClienteDAO.php';
require_once 'ClienteController.php';

$database = new Database();
$clienteDAO = new ClienteDAO($database);
$controller = new ClienteController($clienteDAO);

$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($controller->salvar($_POST)) {
        $mensagem = "<div style='color: #276749; background: #c6f6d5; padding: 10px; border-radius: 6px; margin-bottom: 15px;'>Cliente cadastrado com sucesso!</div>";
    } else {
        $mensagem = "<div style='color: #9b2c2c; background: #fed7d7; padding: 10px; border-radius: 6px; margin-bottom: 15px;'>Preencha os campos obrigatórios.</div>";
    }
}

$clientes = $controller->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Cliente - ERP Modular</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <?= $mensagem ?>

    <h2 class="header-title">Cadastrar Novo Cliente</h2>

    <!-- Formulário Estilizado (Igual à Imagem 2) -->
    <div class="card">
        <form method="POST">
            <div class="form-grid">
                
                <div class="form-group col-12">
                    <label>Tipo de Pessoa *</label>
                    <div class="radio-segmented">
                        <label>
                            <input type="radio" name="tipo_pessoa" value="Física" checked>
                            <span class="radio-btn">Pessoa Física</span>
                        </label>
                        <label>
                            <input type="radio" name="tipo_pessoa" value="Jurídica">
                            <span class="radio-btn">Pessoa Jurídica</span>
                        </label>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label>CPF *</label>
                    <input type="text" name="documento" class="input-control" placeholder="000.000.000-00" required>
                </div>

                <div class="form-group col-6">
                    <label>Tabela de Preço Preferencial *</label>
                    <select name="tabela_preco" class="input-control">
                        <option value="Varejo (Consumidor)">Varejo (Consumidor)</option>
                        <option value="Atacado">Atacado</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>Nome Completo *</label>
                    <input type="text" name="nome" class="input-control" required>
                </div>

                <div class="form-group col-6">
                    <label>Limite de Crédito Crediário (R$) *</label>
                    <input type="number" step="0.01" name="limite_credito" class="input-control" value="500.00">
                </div>

                <div class="form-group col-6">
                    <label>Telefone Principal</label>
                    <input type="text" name="telefone" class="input-control" placeholder="(19) 3800-0000">
                </div>

                <div class="form-group col-6">
                    <label>WhatsApp</label>
                    <div class="input-group">
                        <input type="text" name="whatsapp" class="input-control" placeholder="(19) 99999-8888">
                        <button type="button" class="btn-inline btn-whatsapp">WhatsApp</button>
                    </div>
                </div>

                <div class="form-group col-12">
                    <label>E-mail de Faturamento</label>
                    <input type="email" name="email" class="input-control">
                </div>

                <div class="form-group col-12">
                    <label class="form-checkbox">
                        <input type="checkbox" name="ativo" checked> Cliente Ativo
                    </label>
                </div>

            </div>

            <div class="form-actions">
                <button type="button" class="btn-secondary">Cancelar</button>
                <button type="submit" class="btn-primary">Salvar Cliente</button>
            </div>
        </form>
    </div>

    <!-- Tabela de Clientes (Igual à Imagem 1) -->
    <h2 class="header-title">Carteira de Clientes</h2>
    <div class="card">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Documento</th>
                        <th>Tabela Padrão</th>
                        <th>Limite Crédito</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($clientes)): ?>
                        <tr><td colspan="5" style="text-align:center; color: var(--text-muted);">Nenhum cliente encontrado.</td></tr>
                    <?php else: ?>
                        <?php foreach ($clientes as $c): ?>
                            <tr>
                                <td><strong><?= htmlspecialchars($c['nome']) ?></strong></td>
                                <td><?= htmlspecialchars($c['documento']) ?></td>
                                <td><?= htmlspecialchars($c['tabela_preco']) ?></td>
                                <td>R$ <?= number_format($c['limite_credito'], 2, ',', '.') ?></td>
                                <td>
                                    <span class="badge <?= $c['ativo'] ? 'badge-active' : 'badge-inactive' ?>">
                                        <?= $c['ativo'] ? 'Ativo' : 'Inativo' ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>