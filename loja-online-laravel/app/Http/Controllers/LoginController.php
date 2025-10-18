<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $user = $request->input('usuario');
        $pass = $request->input('senha');

        if ($user === 'admin' && $pass === '123') {
            session(['logado' => true]);
            return redirect('/admin');
        }

        return back()->withErrors(['erro' => 'Credenciais inválidas']);
    }

    public function dashboard()
    {
        if (!session('logado')) {
            return redirect('/login');
        }

        return view('admin');
    }
}