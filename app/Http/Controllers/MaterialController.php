<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Http\Resources\MaterialResource;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();

        return MaterialResource::collection($materials)->resolve();
    }

    public function store(MaterialRequest $request)
    {
        $data = $request->validated();
        $material = Material::create($data);

        return MaterialResource::make($material)->resolve();
    }

    public function show(Material $material)
    {
        return MaterialResource::make($material)->resolve();
    }

    public function update(MaterialRequest $request, Material $material)
    {
        $data = $request->validated();
        $material->update($data);

        return MaterialResource::make($material)->resolve();
    }

    public function destroy(Material $material)
    {
        $material->delete();

        return response()->json([
            'message' => 'deleted'
        ]);
    }
}
