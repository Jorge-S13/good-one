<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = [
        'name'
    ];

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class)->withPivot('consumption')->using(MaterialProduct::class);
    }
    public function warehouses(): BelongsToMany
    {
        return $this->belongsToMany(Warehouse::class)->withPivot('remain','price');
    }
}
