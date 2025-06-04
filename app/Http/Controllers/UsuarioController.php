<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Services\UsuarioService;
use App\Http\Resources\UsuarioResource;

class UsuarioController extends Controller
{
    protected $service;

    public function __construct(UsuarioService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return UsuarioResource::collection($this->service->listar());
    }

    public function store(StoreUsuarioRequest $request)
    {
        $usuario = $this->service->criar($request->validated());
        return new UsuarioResource($usuario);
    }

    public function show($id)
    {
        $usuario = $this->service->buscar($id);
        return new UsuarioResource($usuario);
    }

    public function update(UpdateUsuarioRequest $request, $id)
    {
        $usuario = $this->service->atualizar($id, $request->validated());
        return new UsuarioResource($usuario);
    }

    public function destroy($id)
    {
        $this->service->deletar($id);
        return response()->json(['mensagem' => 'Usuário removido!']);
    }
}