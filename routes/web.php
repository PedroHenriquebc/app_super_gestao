<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('contato', [ContatoController::class, 'contato'])->name('site.conato');
Route::get('sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
    Route::get('produtos', function(){return 'Produtos';})->name('app.produtos');
});


// Route::get('sobre-nos/{nome}/{categoria?}', function(string $nome, int $categoria = 0){
//     return "Olá $nome - Categoria: $categoria";
// })->where('categoria','[0-9]+')->where('nome', '[a-zA-Z]+');