<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCalculatorRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'product_id' => 'required|int',
            'quantity' => 'required|int'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
