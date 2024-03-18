<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Warehouse extends Model
{
    protected $fillable = [
        'name'
    ];

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class)->withPivot('remain','price')->using(MaterialWarehouse::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('remain','price');
    }
}
