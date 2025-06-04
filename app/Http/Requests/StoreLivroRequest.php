<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLivroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'titulo'    => 'required|string|max:255',
            'sinopse'   => 'nullable|string',
            'autor_id'  => 'required|exists:autores,id',
            'genero_id' => 'nullable|exists:generos,id'
        ];
    }
}
