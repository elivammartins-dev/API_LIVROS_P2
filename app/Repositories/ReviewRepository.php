<?php

namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{
    public function all()
    {
        return Review::with(['usuario', 'livro'])->get();
    }

    public function find($id)
    {
        return Review::with(['usuario', 'livro'])->findOrFail($id);
    }

    public function create($data)
    {
        return Review::create($data);
    }

    public function update($id, $data)
    {
        $review = Review::findOrFail($id);
        $review->update($data);
        return $review;
    }

    public function delete($id)
    {
        return Review::destroy($id);
    }
}