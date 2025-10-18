<?php
include 'produtos.php';

$nomeBuscado = $_GET['nome'] ?? '';
$produto = null;

foreach ($produtos as $p) {
  if ($p['nome'] === $nomeBuscado) {
    $produto = $p;
    break;
  }
}

if (!$produto) {
  echo "<p>Produto não encontrado.</p>";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Aqui você atualizaria os dados (em banco ou arquivo)
  // Redireciona para a página principal
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Produto</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <h1>Editar Produto</h1>

  <form method="POST" action="">
    <input type="text" name="nome" value="<?= $produto['nome'] ?>" required />
    <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required />
    <input type="number" name="estoque" value="<?= $produto['estoque'] ?>" required />
    <button type="submit">Salvar alterações</button>
  </form>

</body>
</html>
