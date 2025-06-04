<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nota'  => 'sometimes|required|integer|min:0|max:5',
            'texto' => 'nullable|string'
        ];
    }
}
