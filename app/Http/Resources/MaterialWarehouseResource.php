<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialWarehouseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'material_id' => $this->material_id,
            'warehouse_id' => $this->warehouse_id,
            'remain' => $this->remain,
            'price' => $this->price,
            'created_at' => $this->created_at->format('Y-m-d'),
            'updated_at' => $this->updated_at->format('Y-m-d'),
        ];
    }
}
