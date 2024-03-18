<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MaterialWarehouse extends Pivot
{
    protected $table = 'material_warehouse';
    protected $fillable = [
        'material_id',
        'warehouse_id',
        'remain',
        'price',
        'created_at',
        'updated_at'
    ];

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class);
    }
}
