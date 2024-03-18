<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return ProductResource::collection($products)->resolve();
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $product = Product::create($data);

        return ProductResource::make($product)->resolve();
    }

    public function show(Product $product)
    {
        return ProductResource::make($product)->resolve();
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return ProductResource::make($product)->resolve();
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'deleted'
        ]);
    }
}
