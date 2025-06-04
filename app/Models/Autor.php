<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores';

    protected $fillable = [
        'nome',
        'data_nascimento',
        'biografia',
    ];

    public function livros()
    {
        return $this->hasMany(Livro::class, 'autor_id');
    }
}