<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sku extends Model
{
    protected $table = 'sku';

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }
}
