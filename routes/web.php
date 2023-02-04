<?php

use App\Http\Controllers\DestinacoesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SolicitantesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\LocalizacoesController;
use App\Http\Controllers\OrigensController;
use App\Http\Controllers\ProcedimentosController;
use App\Http\Controllers\ProjetosController;

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

Route::controller(ProdutosController::class)->group(function(){
    Route::get('produtos', 'index');
    Route::get('produtos-export', 'export')->name('produtos.export');
    Route::post('produtos-import', 'import')->name('produtos.import');
});

Route::controller(SolicitantesController::class)->group(function(){
    Route::get('solicitantes', 'index');
    Route::get('solicitantes-export', 'export')->name('solicitantes.export');
    Route::post('solicitantes-import', 'import')->name('solicitantes.import');
});

Route::controller(FornecedoresController::class)->group(function(){
    Route::get('fornecedores', 'index');
    Route::get('fornecedores-export', 'export')->name('fornecedores.export');
    Route::post('fornecedores-import', 'import')->name('fornecedores.import');
});

Route::controller(ProcedimentosController::class)->group(function(){
    Route::get('procedimentos', 'index');
    Route::get('procedimentos-export', 'export')->name('procedimentos.export');
    Route::post('procedimentos-import', 'import')->name('procedimentos.import');
});

Route::controller(ProjetosController::class)->group(function(){
    Route::get('projetos', 'index');
    Route::get('projetos-export', 'export')->name('projetos.export');
    Route::post('projetos-import', 'import')->name('projetos.import');
});

Route::controller(DestinacoesController::class)->group(function(){
    Route::get('destinacoes', 'index');
    Route::get('destinacoes-export', 'export')->name('destinacoes.export');
    Route::post('destinacoes-import', 'import')->name('destinacoes.import');
});

Route::controller(OrigensController::class)->group(function(){
    Route::get('origens', 'index');
    Route::get('origens-export', 'export')->name('origens.export');
    Route::post('origens-import', 'import')->name('origens.import');
});

Route::controller(LocalizacoesController::class)->group(function(){
    Route::get('localizacoes', 'index');
    Route::get('localizacoes-export', 'export')->name('localizacoes.export');
    Route::post('localizacoes-import', 'import')->name('localizacoes.import');
});

