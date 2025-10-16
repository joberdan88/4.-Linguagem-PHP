#  Loja Online em PHP

Este projeto é uma aplicação simples de loja online desenvolvida com **PHP**, **HTML** e **CSS**, como parte dos estudos da pós-graduação em Full Stack. Ele simula uma vitrine de produtos com exibição dinâmica e estrutura modular.

##  Funcionalidades

- Exibição de produtos em tabela
- Separação de lógica PHP e visual HTML
- Estilização com CSS
- Preparado para expansão com banco de dados

##  Estrutura de arquivos
loja-online/ 
├── index.php         
# Página principal ├── produtos.php      # Dados dos produtos ├── estilo.css        # Estilos da tabela


##  Como rodar localmente

### Usando o servidor embutido do PHP:

```bash
php -S localhost:8000 -t loja-online

Depois, acesse no navegador:
http://localhost:8000/index.php

Ou usando XAMPP:
- Copie a pasta loja-online para C:\xampp\htdocs
- Inicie o Apache pelo XAMPP
- Acesse:
http://localhost/loja-online/index.php

Tecnologias utilizadas
- PHP 8.x
- HTML5
- CSS3
- VS Code

