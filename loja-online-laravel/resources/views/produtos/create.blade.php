<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
</head>
<body>
    <h1>Adicionar Produto</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/produtos">
        @csrf
        <label>Nome: <input type="text" name="nome" value="{{ old('nome') }}"></label><br>
        <label>Preço: <input type="number" step="0.01" name="preco" value="{{ old('preco') }}"></label><br>
        <label>Estoque: <input type="number" name="estoque" value="{{ old('estoque') }}"></label><br>
        <label>Categoria: <input type="text" name="categoria" value="{{ old('categoria') }}"></label><br>
        <label>Descrição: <textarea name="descricao">{{ old('descricao') }}</textarea></label><br>
        <button type="submit">Salvar</button>
    </form>

    <a href="/produtos">← Voltar</a>
</body>
</html>
