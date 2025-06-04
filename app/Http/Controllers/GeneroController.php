<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneroRequest;
use App\Http\Requests\UpdateGeneroRequest;
use App\Services\GeneroService;
use App\Http\Resources\GeneroResource;
use App\Http\Resources\LivroResource;

class GeneroController extends Controller
{
    protected $service;

    public function __construct(GeneroService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return GeneroResource::collection($this->service->listar());
    }

    public function store(StoreGeneroRequest $request)
    {
        $genero = $this->service->criar($request->validated());
        return new GeneroResource($genero);
    }

    public function show($id)
    {
        return new GeneroResource($this->service->buscar($id));
    }

    public function update(UpdateGeneroRequest $request, $id)
    {
        $genero = $this->service->atualizar($id, $request->validated());
        return new GeneroResource($genero);
    }

    public function destroy($id)
    {
        $this->service->deletar($id);
        return response()->json(['mensagem' => 'Gênero removido!']);
    }

    // Extras: listar livros desse gênero
    public function livros($genero_id)
    {
        $livros = $this->service->livrosPorGenero($genero_id);
        return LivroResource::collection($livros);
    }
}