<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAutorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nome'           => 'sometimes|required|string|max:255',
            'data_nascimento'=> 'sometimes|required|date',
            'biografia'      => 'nullable|string'
        ];
    }
}