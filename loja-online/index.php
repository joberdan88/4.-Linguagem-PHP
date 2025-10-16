<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <h1>Produtos Disponíveis</body>

    <table>
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Preço</th>
                <th>Quantidade em Estoque</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'produtos.php';

                foreach ($produtos as $produto) {
                    echo "<tr>";
                    echo "<td>{$produto['nome']}</td>";
                    echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
                }
            ?>
        </tbody>
    </table>

</body>
</html> 

