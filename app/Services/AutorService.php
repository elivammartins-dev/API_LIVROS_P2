<?php

namespace App\Services;

use App\Repositories\AutorRepository;

class AutorService
{
    protected $autorRepository;

    public function __construct(AutorRepository $autorRepository)
    {
        $this->autorRepository = $autorRepository;
    }

    public function listar()
    {
        return $this->autorRepository->all();
    }

    public function buscar($id)
    {
        return $this->autorRepository->find($id);
    }

    public function criar($dados)
    {
        return $this->autorRepository->create($dados);
    }

    public function atualizar($id, $dados)
    {
        return $this->autorRepository->update($id, $dados);
    }

    public function deletar($id)
    {
        return $this->autorRepository->delete($id);
    }

    public function livrosPorAutor($id)
    {
        return $this->autorRepository->livros($id);
    }
}