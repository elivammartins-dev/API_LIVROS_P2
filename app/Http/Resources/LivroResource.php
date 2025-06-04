<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LivroResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'      => $this->id,
            'titulo'  => $this->titulo,
            'sinopse' => $this->sinopse,
            'autor'   => new AutorResource($this->whenLoaded('autor')),
            'genero'  => new GeneroResource($this->whenLoaded('genero')),
            'reviews' => ReviewResource::collection($this->whenLoaded('reviews'))
        ];
    }
}