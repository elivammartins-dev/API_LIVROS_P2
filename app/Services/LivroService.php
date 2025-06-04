<?php

namespace App\Services;

use App\Repositories\LivroRepository;

class LivroService
{
    protected $livroRepository;

    public function __construct(LivroRepository $livroRepository)
    {
        $this->livroRepository = $livroRepository;
    }

    public function listar()
    {
        return $this->livroRepository->all();
    }

    public function buscar($id)
    {
        return $this->livroRepository->find($id);
    }

    public function criar($dados)
    {
        return $this->livroRepository->create($dados);
    }

    public function atualizar($id, $dados)
    {
        return $this->livroRepository->update($id, $dados);
    }

    public function deletar($id)
    {
        return $this->livroRepository->delete($id);
    }

    public function reviewsPorLivro($id)
    {
        return $this->livroRepository->reviews($id);
    }
}