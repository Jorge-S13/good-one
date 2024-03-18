<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialWarehouseRequest;
use App\Http\Resources\MaterialWarehouseResource;
use App\Models\MaterialWarehouse;

class MaterialWarehouseController extends Controller
{
    public function index()
    {
        $materialWarehouses = MaterialWarehouse::all();

        return MaterialWarehouseResource::collection($materialWarehouses)->resolve();
    }

    public function store(MaterialWarehouseRequest $request)
    {
        $data = $request->validated();
        $materialWarehouse = MaterialWarehouse::create($data);

        return MaterialWarehouseResource::make($materialWarehouse)->resolve();
    }

    public function show(MaterialWarehouse $materialWarehouse)
    {
        return MaterialWarehouseResource::make($materialWarehouse)->resolve();
    }

    public function update(MaterialWarehouseRequest $request, MaterialWarehouse $materialWarehouse)
    {
        $data = $request->validated();
        $materialWarehouse->update($data);

        return MaterialWarehouseResource::make($materialWarehouse)->resolve();
    }

    public function destroy(MaterialWarehouse $materialWarehouse)
    {
        $materialWarehouse->delete();

        return response()->json([
            'message' => 'deleted'
        ]);
    }
}
