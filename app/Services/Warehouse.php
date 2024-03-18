<?php

namespace App\Services;

class Warehouse
{
    public function remainCalculator(int|float $neededMaterial,int|float $warehouseMaterial):int|float
    {
        return $warehouseMaterial - $neededMaterial;
    }
}
