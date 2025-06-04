<?php

namespace App\Repositories;

use App\Models\Autor;

class AutorRepository
{
    public function all()
    {
        return Autor::all();
    }

    public function find($id)
    {
        return Autor::findOrFail($id);
    }

    public function create($data)
    {
        return Autor::create($data);
    }

    public function update($id, $data)
    {
        $autor = Autor::findOrFail($id);
        $autor->update($data);
        return $autor;
    }

    public function delete($id)
    {
        return Autor::destroy($id);
    }

    // Exemplo: obter todos os livros de um autor
    public function livros($autor_id)
    {
        return Autor::findOrFail($autor_id)->livros;
    }
}