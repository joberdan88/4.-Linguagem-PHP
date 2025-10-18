<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $estoque = $_POST['estoque'];

  // Aqui você salvaria o novo produto (em banco ou arquivo)
  // Redireciona para a página principal
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adicionar Produto</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <h1>Adicionar Novo Produto</h1>

  <form method="POST" action="">
    <input type="text" name="nome" placeholder="Nome do produto" required />
    <input type="number" step="0.01" name="preco" placeholder="Preço" required />
    <input type="number" name="estoque" placeholder="Quantidade em estoque" required />
    <button type="submit">Adicionar</button>
  </form>

</body>
</html>
