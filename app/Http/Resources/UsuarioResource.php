<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'     => $this->id,
            'nome'   => $this->nome,
            'email'  => $this->email,
            'reviews' => ReviewResource::collection($this->whenLoaded('reviews'))
        ];
    }
}