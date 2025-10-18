# 🛒 Loja Online Laravel

Este é um projeto de uma loja online desenvolvido com o framework **Laravel**, como parte dos estudos da disciplina de Linguagem PHP no curso de Pós-Graduação Full Stack.

##  Funcionalidades

- Listagem de produtos com busca
- Adição de novos produtos
- Edição de produtos existentes
- Autenticação simples com login
- Área administrativa protegida
- Estilização com CSS customizado

##  Credenciais de acesso

Para acessar a área administrativa:

- **Usuário:** `admin`
- **Senha:** `123`

##  Estrutura de diretórios
app/ 
├── Http/ │   └── Controllers/ │       
    ├── ProdutoController.php │       
    └── LoginController.php 

resources/ 
    ├── views/ │   
        ├── produtos/ 
            ├── index.blade.php 
            ├── create.blade.php │  
            └── edit.blade.php │   
        ├── login.blade.php │   
        └── admin.blade.php 
        
public/ 
    ├── css/   
        └── styles.css routes/ 
        
└── web.php


##  Como rodar o projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git

2. Instale as dependências:
    ```bash
    composer install

3. Inicie o servidor:
    ```bash
    php artisan serve

4. Acesse o navegador:
    ```bash
    http://localhost:8000



