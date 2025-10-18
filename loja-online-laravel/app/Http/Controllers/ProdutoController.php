<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $termo = $request->input('busca');

        $produtos = [
            ["nome" => "Mouse Gamer RGB", "preco" => 129.90, "estoque" => 10],
            ["nome" => "Teclado Mecânico", "preco" => 249.90, "estoque" => 5],
            ["nome" => "Monitor 24\" Full HD", "preco" => 899.00, "estoque" => 2],
        ];

        if ($termo) {
            $produtos = array_filter($produtos, function ($p) use ($termo) {
                return stripos($p['nome'], $termo) !== false;
            });
        }

        return view('produtos.index', compact('produtos', 'termo'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        // Simulação de salvamento
        return redirect('/produtos');
    }

    public function edit($nome)
    {
        $produto = ["nome" => $nome, "preco" => 100, "estoque" => 1]; // Simulado
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $nome)
    {
        // Simulação de atualização
        return redirect('/produtos');
    }
}
