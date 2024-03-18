<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'material_id' => 'required|int',
            'product_id' => 'required|int',
            'consumption' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
