<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarehouseRequest;
use App\Http\Resources\WarehouseResource;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::all();

        return WarehouseResource::collection($warehouses)->resolve();
    }

    public function store(WarehouseRequest $request)
    {
        $data = $request->validated();
        $warehouse = Warehouse::create($data);

        return WarehouseResource::make($warehouse)->resolve();
    }

    public function show(Warehouse $warehouse)
    {
        return WarehouseResource::make($warehouse)->resolve();
    }

    public function update(WarehouseRequest $request, Warehouse $warehouse)
    {
        $data = $request->validated();
        $warehouse->update($data);

        return WarehouseResource::make($warehouse)->resolve();
    }

    public function destroy(Warehouse $warehouse)
    {
        $warehouse->delete();

        return response()->json([
            'message' => 'deleted'
        ]);
    }
}
