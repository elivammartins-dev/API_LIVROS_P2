<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutorResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'              => $this->id,
            'nome'            => $this->nome,
            'data_nascimento' => $this->data_nascimento,
            'biografia'       => $this->biografia,
            'livros'          => LivroResource::collection($this->whenLoaded('livros')),
        ];
    }
}