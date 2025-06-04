<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivroRequest;
use App\Http\Requests\UpdateLivroRequest;
use App\Services\LivroService;
use App\Http\Resources\LivroResource;
use App\Http\Resources\ReviewResource;

class LivroController extends Controller
{
    protected $service;

    public function __construct(LivroService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return LivroResource::collection($this->service->listar());
    }

    public function store(StoreLivroRequest $request)
    {
        $livro = $this->service->criar($request->validated());
        return new LivroResource($livro);
    }

    public function show($id)
    {
        return new LivroResource($this->service->buscar($id));
    }

    public function update(UpdateLivroRequest $request, $id)
    {
        $livro = $this->service->atualizar($id, $request->validated());
        return new LivroResource($livro);
    }

    public function destroy($id)
    {
        $this->service->deletar($id);
        return response()->json(['mensagem' => 'Livro removido!']);
    }

    // Extra: listar reviews desse livro
    public function reviews($livro_id)
    {
        $reviews = $this->service->reviewsPorLivro($livro_id);
        return ReviewResource::collection($reviews);
    }
}