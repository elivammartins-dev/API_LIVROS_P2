<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Services\AutorService;
use App\Http\Resources\AutorResource;
use App\Http\Resources\LivroResource;

class AutorController extends Controller
{
    protected $service;

    public function __construct(AutorService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return AutorResource::collection($this->service->listar());
    }

    public function store(StoreAutorRequest $request)
    {
        $autor = $this->service->criar($request->validated());
        return new AutorResource($autor);
    }

    public function show($id)
    {
        $autor = $this->service->buscar($id);
        return new AutorResource($autor);
    }

    public function update(UpdateAutorRequest $request, $id)
    {
        $autor = $this->service->atualizar($id, $request->validated());
        return new AutorResource($autor);
    }

    public function destroy($id)
    {
        $this->service->deletar($id);
        return response()->json(['mensagem' => 'Autor removido!']);
    }

    // Extras: listar livros desse autor
    public function livros($autor_id)
    {
        $livros = $this->service->livrosPorAutor($autor_id);
        return LivroResource::collection($livros);
    }
}