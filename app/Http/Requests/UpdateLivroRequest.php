<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLivroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'titulo'    => 'sometimes|required|string|max:255',
            'sinopse'   => 'nullable|string',
            'autor_id'  => 'sometimes|required|exists:autores,id',
            'genero_id' => 'nullable|exists:generos,id'
        ];
    }
}