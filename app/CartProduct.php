<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }
}
