<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscografiaController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::prefix('/agenda')->group(function(){    
    Route::get('/layout/user/cadastrar', [UserController::class, 'addUser'])->name('agenda.cadastrar');
    Route::post('/layout/user/cadastrar', [UserController::class, 'salvar'])->name('agenda.salvar');
    Route::get('/layout/user/pesquisar', [UserController::class, 'pesquisar'])->name('agenda.pesquisar');
    Route::get('/layout/user/listar', [UserController::class, 'listarUser'])->name('agenda.listar');
    Route::get('/layout/user/editar{id}', [UserController::class, 'editarUser'])->name('editar.contato');
    Route::post('atualizar', [UserController::class,'atualizar'])->name('salvar.edit');
    Route::get('deletar/{id}', [UserController::class,'deletUser'])->name('deletar');
    Route::get('layout/user/buscar',[UserController::class, 'pesquisar'])->name('agenda.buscar');
    Route::get('layout/user/buscar',[UserController::class, 'pesquisarContato'])->name('agenda.pesquisar');

});

