<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja Online</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<h1>Produtos Disponíveis</h1>

<form method="GET" action="/produtos">
    <input type="text" name="busca" value="{{ $termo ?? '' }}" placeholder="Buscar produto">
    <button type="submit">Buscar</button>
</form>

<a href="/produtos/novo">➕ Adicionar Produto</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto['nome'] }}</td>
                <td>R$ {{ number_format($produto['preco'], 2, ',', '.') }}</td>
                <td>{{ $produto['estoque'] }}</td>
                <td><a href="/produtos/{{ $produto['nome'] }}/editar">Editar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
