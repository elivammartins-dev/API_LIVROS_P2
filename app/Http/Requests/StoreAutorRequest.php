<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nome'           => 'required|string|max:255',
            'data_nascimento'=> 'required|date',
            'biografia'      => 'nullable|string'
        ];
    }
}