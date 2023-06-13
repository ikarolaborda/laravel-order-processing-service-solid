<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stock extends Model
{
    protected $fillable = [
      'product_id',
      'quantity'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class,'id','product_id');
    }
}
