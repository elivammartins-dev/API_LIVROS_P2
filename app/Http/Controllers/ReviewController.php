<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Services\ReviewService;
use App\Http\Resources\ReviewResource;

class ReviewController extends Controller
{
    protected $service;

    public function __construct(ReviewService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return ReviewResource::collection($this->service->listar());
    }

    public function store(StoreReviewRequest $request)
    {
        $review = $this->service->criar($request->validated());
        return new ReviewResource($review);
    }

    public function show($id)
    {
        $review = $this->service->buscar($id);
        return new ReviewResource($review);
    }

    public function update(UpdateReviewRequest $request, $id)
    {
        $review = $this->service->atualizar($id, $request->validated());
        return new ReviewResource($review);
    }

    public function destroy($id)
    {
        $this->service->deletar($id);
        return response()->json(['mensagem' => 'Review removida!']);
    }
}