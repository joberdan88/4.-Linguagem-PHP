<h1>Login</h1>

<form method="POST" action="/login">
    @csrf
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <button type="submit">Entrar</button>
    @error('erro') <p>{{ $message }}</p> @enderror
</form>
