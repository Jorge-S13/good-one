<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialWarehouseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'material_id' => 'required|int',
            'warehouse_id' => 'required|int',
            'remain' => 'required',
            'price' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
