<?php
session_start();

// Inicializa o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Adiciona um produto ao carrinho
if (isset($_GET['produto'])) {
    $produto = $_GET['produto'];
    $_SESSION['carrinho'][] = $produto;
}

// Limpa o carrinho
if (isset($_GET['acao']) && $_GET['acao'] == 'limpar') {
    $_SESSION['carrinho'] = [];
    header("Location: index.php"); // Redireciona para evitar reenvio de formulário
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>

    <h2>Produtos Disponíveis</h2>
    <ul>
        <li><a href="?produto=Notebook">Adicionar Notebook</a></li>
        <li><a href="?produto=Smartphone">Adicionar Smartphone</a></li>
        <li><a href="?produto=Fone de Ouvido">Adicionar Fone de Ouvido</a></li>
        <li><a href="?produto=Mouse">Adicionar Mouse</a></li>
    </ul>

    <h2>Carrinho de Compras</h2>
    <?php if (!empty($_SESSION['carrinho'])): ?>
        <ul>
            <?php foreach ($_SESSION['carrinho'] as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="?acao=limpar">🗑️ Limpar Carrinho</a>
    <?php else: ?>
        <p>O carrinho está vazio.</p>
    <?php endif; ?>

</body>
</html>
