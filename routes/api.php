<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ReviewController;

// CRUD completo para cada recurso principal (incluindo POST, PUT, DELETE, etc)
Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('autores', AutorController::class);
Route::apiResource('generos', GeneroController::class);
Route::apiResource('livros', LivroController::class);
Route::apiResource('reviews', ReviewController::class);

// Rotas extras (relacionamentos específicos do PDF/ER)

// Listar todas as reviews de um usuário
Route::get('usuarios/{usuario}/reviews', [UsuarioController::class, 'reviews']);

// Listar todos os livros de um autor
Route::get('autores/{autor}/livros', [AutorController::class, 'livros']);

// Listar todos os autores já com seus livros (opcional)
Route::get('autores-com-livros', [AutorController::class, 'autoresComLivros']);

// Listar todos os livros de um gênero
Route::get('generos/{genero}/livros', [GeneroController::class, 'livros']);

// Listar todos os gêneros já com seus livros (opcional)
Route::get('generos-com-livros', [GeneroController::class, 'generosComLivros']);

// Listar todas as reviews de um livro
Route::get('livros/{livro}/reviews', [LivroController::class, 'reviews']);

// Listar todos os livros já com reviews, autor e gênero
Route::get('livros-detalhado', [LivroController::class, 'livrosDetalhado']);

Route::get('/teste-diagnostico', function() {
    return 'API OK';
});

