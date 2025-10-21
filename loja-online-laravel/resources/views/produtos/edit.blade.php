<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto: {{ $produto->nome }}</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/produtos/{{ $produto->nome }}">
        @csrf
        <label>Preço: <input type="number" step="0.01" name="preco" value="{{ old('preco', $produto->preco) }}"></label><br>
        <label>Estoque: <input type="number" name="estoque" value="{{ old('estoque', $produto->estoque) }}"></label><br>
        <label>Categoria: <input type="text" name="categoria" value="{{ old('categoria', $produto->categoria) }}"></label><br>
        <label>Descrição: <textarea name="descricao">{{ old('descricao', $produto->descricao) }}</textarea></label><br>
        <button type="submit">Atualizar</button>
    </form>

    <form method="POST" action="/produtos/{{ $produto->nome }}/excluir" style="margin-top: 20px;">
        @csrf
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">🗑️ Excluir Produto</button>
    </form>

    <a href="/produtos">← Voltar</a>
</body>
</html>