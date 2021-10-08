<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/sobre',[\App\Http\Controllers\SobreNosController::class, 'sobre'])->name('sobre');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('contato');

Route::prefix('/app')->group(function () {
    Route::get('/clientes',[\App\Http\Controllers\ClientesController::class, 'clientes'])->name('clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedoresController::class, 'fornecedores'])->name('fornecedores');
    Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'produtos'])->name('produtos');
});

Route::fallback([\App\Http\Controllers\ErroController::class, 'erro']);
