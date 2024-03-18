<?php

namespace App\Services;

use App\Models\Material;
use App\Models\MaterialWarehouse;
use App\Models\Product;

class ProductCalculator
{
    public function materialConsumptionCalc(int $id,int $quantity):array
    {
        $product = Product::find($id);

        $materials = $product->materials;
        $totalMaterials = [];

        foreach ($materials as $material) {
            if (!isset($totalMaterials[$material->id])) {
                $totalMaterials[$material->id] = 0;
            }
            // Вычисляем общее количество материала, необходимое для производства
            $totalMaterials[$material->id] += $material->pivot->consumption * $quantity;

            // Получаем текущий остаток материала на складе
            $materialWarehouses = MaterialWarehouse::where('material_id', $material->id)->get();
            $remain = 0;
            foreach ($materialWarehouses as $materialWarehouse) {
                $remain += $materialWarehouse->remain;
            }

            // Вычисляем остаток или нехватку материала
            $totalMaterials[$material->id] = $remain - $totalMaterials[$material->id];
        }

        return $totalMaterials;
    }
}
