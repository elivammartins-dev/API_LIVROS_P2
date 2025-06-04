<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nome' => 'sometimes|required|string|max:255|unique:generos,nome,' . $this->genero
        ];
    }
}
