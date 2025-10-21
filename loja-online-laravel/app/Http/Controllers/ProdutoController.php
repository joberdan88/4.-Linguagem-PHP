<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $termo = $request->input('busca');

        $produtos = Produto::query()
            ->when($termo, function ($query, $termo) {
                $query->where('nome', 'like', "%{$termo}%");
            })
            ->get();

        return view('produtos.index', compact('produtos', 'termo'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'categoria' => 'nullable|string',
            'descricao' => 'nullable|string',
        ]);

        Produto::create($request->only(['nome', 'preco', 'estoque', 'descricao', 'categoria']));

        return redirect('/produtos');
    }

    public function edit($nome)
    {
        $produto = Produto::where('nome', $nome)->firstOrFail();
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $nome)
    {
        $produto = Produto::where('nome', $nome)->firstOrFail();
        $produto->update($request->only(['preco', 'estoque', 'descricao', 'categoria']));
        return redirect('/produtos');
    }

    public function destroy($nome)
    {
    $produto = Produto::where('nome', $nome)->firstOrFail();
    $produto->delete();

    return redirect('/produtos');
    }
}
