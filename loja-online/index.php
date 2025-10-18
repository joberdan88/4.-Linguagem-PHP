<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'produtos.php';

if (isset($_GET['busca'])) {
  $busca = strtolower($_GET['busca']);
  $produtos = array_filter($produtos, function($p) use ($busca) {
    return strpos(strtolower($p['nome']), $busca) !== false;
  });
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <h1>Produtos Disponíveis</h1>

  <form method="GET" action="">
    <input type="text" name="busca" placeholder="Buscar produto..." />
    <button type="submit">Buscar</button>
  </form>

  <a href="adicionar.php" class="botao">➕ Adicionar Produto</a>

  <table>
    <thead>
      <tr>
        <th>Nome do Produto</th>
        <th>Preço</th>
        <th>Quantidade em Estoque</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($produtos as $produto): ?>
        <tr>
          <td><?= $produto['nome'] ?></td>
          <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
          <td><?= $produto['estoque'] ?></td>
          <td>
            <a href="editar.php?nome=<?= urlencode($produto['nome']) ?>" class="botao botao-editar">Editar</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>