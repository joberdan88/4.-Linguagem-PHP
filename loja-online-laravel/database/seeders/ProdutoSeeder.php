<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'nome' => 'Camisa Polo Masculina',
                'preco' => 89.90,
                'estoque' => 50,
                'descricao' => 'Camisa polo de algodão com acabamento premium.',
                'categoria' => 'Roupas'
            ],
            [
                'nome' => 'Tênis Esportivo Feminino',
                'preco' => 199.99,
                'estoque' => 30,
                'descricao' => 'Tênis leve e confortável para corrida.',
                'categoria' => 'Calçados'
            ],
            [
                'nome' => 'Relógio Digital Smart',
                'preco' => 149.00,
                'estoque' => 20,
                'descricao' => 'Relógio com monitor cardíaco e notificações.',
                'categoria' => 'Acessórios'
            ],
            [
                'nome' => 'Fone Bluetooth',
                'preco' => 129.90,
                'estoque' => 40,
                'descricao' => 'Fone sem fio com cancelamento de ruído.',
                'categoria' => 'Eletrônicos'
            ],
            [
                'nome' => 'Mochila Executiva',
                'preco' => 179.00,
                'estoque' => 25,
                'descricao' => 'Mochila resistente com compartimento para notebook.',
                'categoria' => 'Bolsas e Mochilas'
            ],
        ]);
    }
}