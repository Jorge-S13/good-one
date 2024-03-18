<?php

namespace App\Console\Commands;




use App\Models\Material;
use App\Models\MaterialWarehouse;
use App\Models\Product;
use App\Models\Warehouse;
use App\Services\ProductCalculator;
use Illuminate\Console\Command;

class TestServicesCommand extends Command
{
    protected $signature = 'test:services';

    protected $description = 'Services test command';

    public function handle()
    {


        $calc = new ProductCalculator();
        $neededMaterial = $calc->materialConsumptionCalc(1,30);
        print_r($neededMaterial);

//        $calc->test($neededMaterial);

//        $remainCalc = $calc->remainCalc();

    }
}
