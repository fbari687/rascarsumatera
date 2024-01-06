<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'type_id' => $this->type_id,
            'brand_id' => $this->brand_id,
            'type' => $this->type,
            'brand' => $this->brand,
            'images' => $this->image
        ];
    }
}
