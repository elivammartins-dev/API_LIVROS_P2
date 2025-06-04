<?php

namespace App\Services;

use App\Repositories\ReviewRepository;

class ReviewService
{
    protected $reviewRepository;

    public function __construct(ReviewRepository $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    public function listar()
    {
        return $this->reviewRepository->all();
    }

    public function buscar($id)
    {
        return $this->reviewRepository->find($id);
    }

    public function criar($dados)
    {
        return $this->reviewRepository->create($dados);
    }

    public function atualizar($id, $dados)
    {
        return $this->reviewRepository->update($id, $dados);
    }

    public function deletar($id)
    {
        return $this->reviewRepository->delete($id);
    }
}