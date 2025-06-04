<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'usuario_id'=> 'required|exists:usuarios,id',
            'livro_id'  => 'required|exists:livros,id',
            'nota'      => 'required|integer|min:0|max:5',
            'texto'     => 'nullable|string'
        ];
    }
}