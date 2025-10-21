<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect('/produtos');
});

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/novo', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produtos/{nome}/editar', [ProdutoController::class, 'edit']);
Route::post('/produtos/{nome}', [ProdutoController::class, 'update']);
Route::post('/produtos/{nome}/excluir', [ProdutoController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/admin', [LoginController::class, 'dashboard']);

