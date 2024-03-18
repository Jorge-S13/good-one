<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MaterialProduct extends Pivot
{
    protected $table = 'material_product';
    protected $fillable =[
        'material_id',
        'product_id',
        'consumption',
        'created_at',
        'updated_at'
    ];

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
