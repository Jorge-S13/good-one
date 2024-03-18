<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCalculatorRequest;
use App\Services\ProductCalculator;

class ProductCalculatorController extends Controller
{
    private $service;
    public function __construct(ProductCalculator $service)
    {
        $this->service = $service;
    }

    public function calculate(ProductCalculatorRequest $request)
    {
        $data = $request->validated();
        $res = $this->service->materialConsumptionCalc($data["product_id"], $data["quantity"]);
        return response()->json($res);
    }
}
