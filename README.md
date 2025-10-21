# 🛍️ Loja Online Laravel

Este é um projeto de loja online desenvolvido com **Laravel 12** e **PHP 8.2**.
=======

##  Funcionalidades

- Listagem de produtos com busca
<<<<<<< HEAD
- Cadastro de novos produtos
- Edição e exclusão de produtos
- Validação de dados nos formulários
- Interface simples com Blade
- Banco de dados MySQL com migrations e seeders
- Autenticação básica de administrador

##  Tecnologias utilizadas

- Laravel 12.34
- PHP 8.2
- MySQL (via XAMPP)
- Blade (templating)
- HTML/CSS
- Git + GitHub

##  Como rodar o projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/loja-online-laravel.git
   cd loja-online-laravel

2. Instale as dependências:
    ```bash
    composer install

3. - Configure o .env:
- Crie o arquivo .env com base no .env.example
- Defina o DB_DATABASE, DB_USERNAME, DB_PASSWORD
- Gere a chave:

    ```bash
    php artisan key:generate

4. Rode as migrations e seeders:
    ```bash
    php artisan migrate
    php artisan db:seed

5. Inicie o servidor:
    ```bash
    php artisan serve

6. Acesse o navegador:
http://localhost:8000/produtos

