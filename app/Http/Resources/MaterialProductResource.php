<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'material_id' => $this->material_id,
            'product_id' => $this->product_id,
            'consumption' => $this->consumption,
        ];
    }
}
