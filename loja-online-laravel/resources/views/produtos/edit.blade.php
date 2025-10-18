<h1>Editar Produto</h1>

<form method="POST" action="/produtos/{{ $produto['nome'] }}">
    @csrf
    <input type="text" name="nome" value="{{ $produto['nome'] }}" required>
    <input type="number" step="0.01" name="preco" value="{{ $produto['preco'] }}" required>
    <input type="number" name="estoque" value="{{ $produto['estoque'] }}" required>
    <button type="submit">Salvar</button>
</form>
