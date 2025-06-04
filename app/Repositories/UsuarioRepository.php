<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository
{
    public function all()
    {
        return Usuario::all();
    }

    public function find($id)
    {
        return Usuario::findOrFail($id);
    }

    public function create($data)
    {
        return Usuario::create($data);
    }

    public function update($id, $data)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($data);
        return $usuario;
    }

    public function delete($id)
    {
        return Usuario::destroy($id);
    }
}