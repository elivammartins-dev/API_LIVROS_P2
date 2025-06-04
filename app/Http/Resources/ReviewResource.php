<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'      => $this->id,
            'nota'    => $this->nota,
            'texto'   => $this->texto,
            'usuario' => new UsuarioResource($this->whenLoaded('usuario')),
            'livro'   => new LivroResource($this->whenLoaded('livro'))
        ];
    }
}