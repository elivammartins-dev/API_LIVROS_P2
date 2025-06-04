<?php

namespace App\Services;

use App\Repositories\GeneroRepository;

class GeneroService
{
    protected $generoRepository;

    public function __construct(GeneroRepository $generoRepository)
    {
        $this->generoRepository = $generoRepository;
    }

    public function listar()
    {
        return $this->generoRepository->all();
    }

    public function buscar($id)
    {
        return $this->generoRepository->find($id);
    }

    public function criar($dados)
    {
        return $this->generoRepository->create($dados);
    }

    public function atualizar($id, $dados)
    {
        return $this->generoRepository->update($id, $dados);
    }

    public function deletar($id)
    {
        return $this->generoRepository->delete($id);
    }

    public function livrosPorGenero($id)
    {
        return $this->generoRepository->livros($id);
    }
}