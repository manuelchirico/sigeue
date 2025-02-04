<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampoController;
use App\Http\Controllers\GinasioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuariorController;

// Rota inicial que redireciona diretamente para a tela de boas-vindas
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');


    // Rotas para os campos
    Route::get('/campos', [CampoController::class, 'index'])->name('campos.index');
    Route::get('/campos/create', [CampoController::class, 'create'])->name('campos.create');
    Route::post('/campos', [CampoController::class, 'store'])->name('campos.store');
    Route::delete('/campos/{id}', [CampoController::class, 'destroy'])->name('campos.destroy');
    Route::get('/campos/{campo}/edit', [CampoController::class, 'edit'])->name('campos.edit');
    Route::put('/campos/{campo}', [CampoController::class, 'update'])->name('campos.update');
    Route::get('campos/pdf', [CampoController::class, 'generatePDF'])->name('campos.pdf');

    // Rotas para o ginásio
    Route::get('/ginasio', [GinasioController::class, 'index'])->name('ginasio.index');
    Route::get('/ginasio/create', [GinasioController::class, 'create'])->name('ginasio.create');
    Route::post('/ginasio', [GinasioController::class, 'store'])->name('ginasio.store');
    Route::get('/ginasio/{ginasio}/edit', [GinasioController::class, 'edit'])->name('ginasio.edit');
    Route::put('/ginasio/{ginasio}', [GinasioController::class, 'update'])->name('ginasio.update');
    Route::delete('/ginasio/{id}', [GinasioController::class, 'destroy'])->name('ginasio.destroy');
    Route::get('/ginasio/pdf', [GinasioController::class, 'generatePDF'])->name('ginasio.pdf');

    // Rotas para os Residencias
    Route::get('/residencia/entradas/create', [ReservaController::class, 'create'])->name('residencia.entradas.create');
    Route::post('/residencia/entradas', [ReservaController::class, 'store'])->name('residencia.entradas.store');
    Route::get('/residencia/entradas', [ReservaController::class, 'index'])->name('residencia.entradas.list');
    Route::get('/residencia/entradas/{id}/edit', [ReservaController::class, 'edit'])->name('residencia.entradas.edit');
    Route::put('/residencia/entradas/{id}', [ReservaController::class, 'update'])->name('residencia.entradas.update');
    Route::delete('/residencia/entradas/{id}', [ReservaController::class, 'destroy'])->name('residencia.entradas.destroy');
    Route::get('/residencia/saida', [ReservaController::class, 'pagas'])->name('residencia.saida.index');

    // Rota para relatório
    Route::get('/residencia/relatorio', [ReservaController::class, 'filtradas'])->name('residencia.relatorio.filtradas');
    Route::get('/residencia/relatorio/pdf', [ReservaController::class, 'gerarPDF'])->name('residencia.relatorio.pdf');

    // Rotas para receita
    Route::get('/receita', [ReceitaController::class, 'index'])->name('receita.index');
    Route::get('receita/edit/{mes}', [ReceitaController::class, 'edit'])->name('receitas.edit');
    Route::post('receita/update/{mes}', [ReceitaController::class, 'update'])->name('receitas.update');
    Route::get('/receita/pdf', [ReceitaController::class, 'generatePDF'])->name('receitas.pdf');



// Rota para registro de usuários
Route::get('/users/register', [UsuariorController::class, 'showRegisterForm'])->name('users.register');
Route::post('/register', [UsuariorController::class, 'register'])->name('users.register.store');
