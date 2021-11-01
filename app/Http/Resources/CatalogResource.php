<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CatalogResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'preview' => $this->preview,
            'images' => $this->images,
            'category' => $this->category,
            'license' => $this->license,
            'user' => $this->user->name,
            'download' => $this->download,
            'rating' => $this->rating,
        ];
    }
}
