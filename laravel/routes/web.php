<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

// --- ROTAS DE VIEW (RENDERIZAR AS TELAS BLADE) ---
Route::view('/curso', 'curso.cadastro');
Route::view('/professor', 'professor.cadastro');
Route::view('/componente', 'componente.cadastro');
Route::view('/administrador', 'administrador.cadastro');


// --- GRUPOS DE SINTAXE WEB DAS ENTIDADES ---

// ALUNO
Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
    Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name('aluno.list');
}); 

// CURSO
Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\CursoController::class, 'index'])->name('curso.index');
    Route::post('/add', [App\Http\Controllers\CursoController::class, 'add'])->name('curso.add');
    Route::post('/remove', [App\Http\Controllers\CursoController::class, 'remove'])->name('curso.remove');
    Route::post('/edit', [App\Http\Controllers\CursoController::class, 'edit'])->name('curso.edit');
    Route::get('/list', [App\Http\Controllers\CursoController::class, 'list'])->name('curso.list');
});

// PROFESSOR
Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.index');
    Route::post('/add', [App\Http\Controllers\ProfessorController::class, 'add'])->name('professor.add');
    Route::post('/remove', [App\Http\Controllers\ProfessorController::class, 'remove'])->name('professor.remove');
    Route::post('/edit', [App\Http\Controllers\ProfessorController::class, 'edit'])->name('professor.edit');
    Route::get('/list', [App\Http\Controllers\ProfessorController::class, 'list'])->name('professor.list');
});

// COMPONENTE
Route::prefix('/componente')->group(function(){
    Route::get('/index', [App\Http\Controllers\ComponenteController::class, 'index'])->name('componente.index');
    Route::post('/add', [App\Http\Controllers\ComponenteController::class, 'add'])->name('componente.add');
    Route::post('/remove', [App\Http\Controllers\ComponenteController::class, 'remove'])->name('componente.remove');
    Route::post('/edit', [App\Http\Controllers\ComponenteController::class, 'edit'])->name('componente.edit');
    Route::get('/list', [App\Http\Controllers\ComponenteController::class, 'list'])->name('componente.list');
});

// ADMINISTRADOR
Route::prefix('/administrador')->group(function(){
    Route::get('/index', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administrador.index');
    Route::post('/add', [App\Http\Controllers\AdministradorController::class, 'add'])->name('administrador.add');
    Route::post('/remove', [App\Http\Controllers\AdministradorController::class, 'remove'])->name('administrador.remove');
    Route::post('/edit', [App\Http\Controllers\AdministradorController::class, 'edit'])->name('administrador.edit');
    Route::get('/list', [App\Http\Controllers\AdministradorController::class, 'list'])->name('administrador.list');
});