<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');
Route::prefix('/app')->group(function(){
Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
Route::get('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

require __DIR__.'/auth.php';
