<?php

namespace App\Repositories;

use App\Models\Livro;

class LivroRepository
{
    public function all()
    {
        return Livro::with(['autor', 'genero', 'reviews'])->get();
    }

    public function find($id)
    {
        return Livro::with(['autor', 'genero', 'reviews'])->findOrFail($id);
    }

    public function create($data)
    {
        return Livro::create($data);
    }

    public function update($id, $data)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($data);
        return $livro;
    }

    public function delete($id)
    {
        return Livro::destroy($id);
    }

    // Exemplo: obter todas as reviews de um livro
    public function reviews($livro_id)
    {
        return Livro::findOrFail($livro_id)->reviews;
    }
}