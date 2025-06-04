<?php

namespace App\Repositories;

use App\Models\Genero;

class GeneroRepository
{
    public function all()
    {
        return Genero::all();
    }

    public function find($id)
    {
        return Genero::findOrFail($id);
    }

    public function create($data)
    {
        return Genero::create($data);
    }

    public function update($id, $data)
    {
        $genero = Genero::findOrFail($id);
        $genero->update($data);
        return $genero;
    }

    public function delete($id)
    {
        return Genero::destroy($id);
    }

    // Exemplo: obter todos os livros de um gênero
    public function livros($genero_id)
    {
        return Genero::findOrFail($genero_id)->livros;
    }
}