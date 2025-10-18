<h1>Adicionar Produto</h1>

<form method="POST" action="/produtos">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="number" step="0.01" name="preco" placeholder="Preço" required>
    <input type="number" name="estoque" placeholder="Estoque" required>
    <button type="submit">Adicionar</button>
</form>
