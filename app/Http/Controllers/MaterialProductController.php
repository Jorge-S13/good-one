<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialProductRequest;
use App\Http\Resources\MaterialProductResource;
use App\Models\MaterialProduct;

class MaterialProductController extends Controller
{
    public function index()
    {
        $materialProduct = MaterialProduct::all();

        return MaterialProductResource::collection($materialProduct)->resolve();
    }

    public function store(MaterialProductRequest $request)
    {
        $data = $request->validated();
        $materialProduct = MaterialProduct::create($data);

        return MaterialProductResource::make($materialProduct)->resolve();
    }

    public function show(MaterialProduct $materialProduct)
    {
        return MaterialProductResource::make($materialProduct)->resolve();
    }

    public function update(MaterialProductRequest $request, MaterialProduct $materialProduct)
    {
        $data = $request->validated();
        $materialProduct->update($data);

        return MaterialProductResource::make($materialProduct)->resolve();
    }

    public function destroy(MaterialProduct $materialProduct)
    {
        $materialProduct->delete();

        return response()->json([
            'message' => 'deleted'
        ]);
    }
}
