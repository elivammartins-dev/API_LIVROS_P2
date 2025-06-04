<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livro extends Model
{
    use HasFactory;

    protected $table = 'livros';

    protected $fillable = [
        'titulo',
        'sinopse',
        'autor_id',
        'genero_id',
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id');
 }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'livro_id');
    }
}