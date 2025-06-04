<?php

namespace App\Services;

use App\Repositories\UsuarioRepository;

class UsuarioService
{
    protected $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function listar()
    {
        return $this->usuarioRepository->all();
    }

    public function buscar($id)
    {
        return $this->usuarioRepository->find($id);
    }

    public function criar($dados)
    {
        return $this->usuarioRepository->create($dados);
    }

    public function atualizar($id, $dados)
    {
        return $this->usuarioRepository->update($id, $dados);
    }

    public function deletar($id)
    {
        return $this->usuarioRepository->delete($id);
    }
}